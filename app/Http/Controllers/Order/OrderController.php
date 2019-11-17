<?php

namespace App\Http\Controllers\Order;

use App\Extensions\Cart\CartFacade;
use App\Extensions\Cart\CartProduct;
use App\Extensions\Payments\Payer;
use App\Http\Controllers\Controller;
use App\Models\Order\Order;
use App\Models\Order\OrderProduct;
use App\Models\Order\YandexPayment;
use App\Models\Product\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        $products = CartFacade::getProducts()
            ->getByIds($request->products);

        return JsonResponse::create(
            [
                'content' => view(
                    'order.index',
                    [
                        'products' => $products
                    ]
                )->render(),
            ]
        );
    }

    public function store(Request $request)
    {
        $order = new Order();

        $order->firstname = $request->first_name;
        $order->lastname = $request->last_name;
        $order->email = $request->email;
        $order->shipping_address_1 = $request->delivery_address;
        $order->payment_method = $request->payment_method;
        $order->store_name = 'charm';
        $order->store_url = config('app.url');
        $order->telephone = $request->telephone;
        $order->order_status_id = Order::STATUS_WAITING;

        $order->save();

        $totalOrderPrice = 0;
        $cartProducts = CartFacade::getProducts();
        foreach ($request->products as $id => $flag) {
            /** @var CartProduct $cartProduct */
            $cartProduct = $cartProducts->get($id);

            $orderProduct = new OrderProduct();

            $orderProduct->product_id = $cartProduct->product->product_id;
            $orderProduct->order_id = $order->order_id;
            $orderProduct->model = $cartProduct->product->model;
            $orderProduct->name = $cartProduct->product->description->name;
            $orderProduct->quantity = $request->quantity[$id];
            $orderProduct->total = $cartProduct->product->price * $request->quantity[$id];
            $orderProduct->price = $cartProduct->product->price;
            $orderProduct->reward = 0;

            $orderProduct->save();

            $totalOrderPrice += $orderProduct->total;

            /** @var Product $complectionProduct */
            foreach ($cartProduct->complection as $complectionProduct) {
                $orderComplectionProduct = new OrderProduct();

                $orderComplectionProduct->product_id = $complectionProduct->product_id;
                $orderComplectionProduct->order_id = $order->order_id;
                $orderComplectionProduct->model = $complectionProduct->model;
                $orderComplectionProduct->name = $complectionProduct->description->name;
                $orderComplectionProduct->quantity = $request->quantity[$id];
                $orderComplectionProduct->total = $complectionProduct->price * $request->quantity[$id];
                $orderComplectionProduct->price = $complectionProduct->price;
                $orderComplectionProduct->reward = 0;

                $orderComplectionProduct->save();

                $totalOrderPrice += $orderComplectionProduct->total;
            }

            CartFacade::removeProduct($id);
        }

        $order->total = $totalOrderPrice;

        $order->save();
        $payment = Payer::getPayment($order);
        $payment->pay();

        return JsonResponse::create(
            [
                'success' => true,
                'redirectUrl' => $payment->getRedirectUrl(),
            ]
        );
    }

    public function success(Order $order)
    {
        return view('order.success', compact('order'));
    }

    public function yandexPaymentCallback(Request $request)
    {
        $yandexPayment = YandexPayment::findByYandexOrderId($request->object['id']);

        if ($request->object['status'] == 'succeeded') {
            $yandexPayment->order->order_status_id = Order::STATUS_IN_PROCESS;
            $yandexPayment->order->save();

            redirect();
        }
    }

    public function show(Order $order)
    {
        return view('order.show', compact('order'));
    }

    public function showByHash($hash)
    {
        $order = Order::findByHash($hash);

        return view('order.show', compact('order'));
    }

    public function sberbankOrder(Order $order)
    {
        return view('order.show', compact('order'));
    }

    public function yandexSuccess(Order $order)
    {
        return view('order.yandexSuccess', compact('order'));
    }

    public function yandexError(Order $order)
    {
        $tryPayAgainUrl = Payer::getPayment($order)->pay();

        return view('order.yandexError', compact('order', 'tryPayAgainUrl'));
    }
}