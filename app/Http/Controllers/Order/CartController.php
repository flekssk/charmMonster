<?php

namespace App\Http\Controllers\Order;

use App\Extensions\Cart\CartFacade;
use App\Http\Controllers\Controller;
use App\Requests\Order\ProductToCartFormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(Request $request)
    {
        return view('cart.index', ['products' => CartFacade::getProducts()]);
    }

    public function addToCart(ProductToCartFormRequest $request)
    {
        /** @var Collection $products */
        $products = Session::get('cart.products', collect());

        $products->put($request->product_id, $request->product_id);

        Session::put('cart.products', $products);

        return JsonResponse::create(
            [
                'success'       => true,
                'widgetContent' => CartFacade::renderWidget()->render(),
            ]
        );
    }

    public function removeFromCart(ProductToCartFormRequest $request)
    {
        /** @var Collection $products */
        $products = Session::get('cart.products', collect());

        Session::forget('cart.products');

        $products->forget($request->product_id);

        Session::put('cart.products', $products);

        return JsonResponse::create(
            [
                'success'       => true,
                'widgetContent' => CartFacade::renderWidget()->render(),
            ]
        );
    }
}