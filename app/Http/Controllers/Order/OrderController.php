<?php

namespace App\Http\Controllers\Order;

use App\Extensions\Cart\CartFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\Order\OrderFormRequest;
use App\Models\Order\Order;
use App\Models\Order\OrderProduct;
use App\Models\Product\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(Request $request)
    {
        return JsonResponse::create(
            [
                'content' => view('order.index')->render(),
            ]
        );
    }

    public function store(OrderFormRequest $request)
    {
        $order = new Order();

        $order->firstname          = $request->first_name;
        $order->lastname           = $request->last_name;
        $order->email              = $request->email;
        $order->shipping_address_1 = $request->delivery_address;
        $order->payment_method     = $request->payment_method;
        $order->store_name         = 'charm';
        $order->store_url          = config('app.url');
        $order->telephone          = $request->telephone;
        $order->order_status_id    = 1;

        $order->save();

        $totalOrderPrice = 0;
        foreach ($request->products as $id => $flag) {
            $product = Product::find($id);

            $orderProduct = new OrderProduct();

            $orderProduct->product_id = $product->product_id;
            $orderProduct->order_id   = $order->order_id;
            $orderProduct->model      = $product->model;
            $orderProduct->name       = $product->description->name;
            $orderProduct->quantity   = $request->quantity[$id];
            $orderProduct->total      = $product->price * $request->quantity[$id];
            $orderProduct->price      = $product->price;
            $orderProduct->reward     = 0;

            $orderProduct->save();

            $totalOrderPrice += $orderProduct->total;

            CartFacade::removeProduct($id);
        }

        $order->total = $totalOrderPrice;

        return JsonResponse::create(
            [
                'success'  => true,
                'order_id' => $order->order_id,
            ]
        );
    }

    public function success(Order $order)
    {
        return view('order.success', compact('order'));
    }
}