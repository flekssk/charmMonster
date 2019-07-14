<?php

namespace App\Http\Controllers\Order;

use App\Extensions\Cart\CartFacade;
use App\Http\Controllers\Controller;
use App\Requests\Order\ProductToCartFormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(Request $request)
    {
        return view('cart.index', ['products' => CartFacade::getProducts()]);
    }

    public function addToCart(ProductToCartFormRequest $request)
    {
        CartFacade::addProduct($request->product_id);

        return JsonResponse::create(
            [
                'success'       => true,
                'widgetContent' => CartFacade::renderWidget()->render(),
                'totalPrice'    => CartFacade::totalPrice(),
            ]
        );
    }

    public function removeFromCart(ProductToCartFormRequest $request)
    {
        CartFacade::removeProduct($request->product_id);

        return JsonResponse::create(
            [
                'success'       => true,
                'widgetContent' => CartFacade::renderWidget()->render(),
                'totalPrice'    => CartFacade::totalPrice(),
            ]
        );
    }

    public function changeCount(Request $request)
    {
        CartFacade::changeProductCount($request->product_id, $request->count);

        return JsonResponse::create(
            [
                'totalPrice'        => CartFacade::totalPrice(),
                'productTotalPrice' => CartFacade::productTotalPrice($request->product_id),
            ]
        );
    }
}