<?php

namespace App\Http\Controllers\Order;

use App\Decorators\PriceDecorator;
use App\Extensions\Cart\CartFacade;
use App\Extensions\Cart\CartProduct;
use App\Http\Controllers\Controller;
use App\Models\Product\Product;
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
        $cartProduct = new CartProduct(Product::find($request->product_id));
        $complection = [];

        foreach ($request->get('complection', []) as $complectionProductId) {
            $complection[] = Product::find($complectionProductId);
        }
        $cartProduct->addComplection($complection);

        CartFacade::addProduct($cartProduct);

        return JsonResponse::create(
            [
                'success' => true,
                'widgetContent' => CartFacade::renderWidget()->render(),
                'totalPrice' => CartFacade::totalPrice(),
                'id' => $cartProduct->getUniqueId(),
            ]
        );
    }

    public function removeFromCart(ProductToCartFormRequest $request)
    {
        CartFacade::removeProduct($request->product_id);

        return JsonResponse::create(
            [
                'success' => true,
                'widgetContent' => CartFacade::renderWidget()->render(),
                'totalPrice' => CartFacade::totalPrice(),
            ]
        );
    }

    public function changeCount(Request $request)
    {
        CartFacade::changeProductCount($request->product_id, $request->count);

        return JsonResponse::create(
            [
                'totalPrice' => CartFacade::totalPrice(),
                'productTotalPrice' => CartFacade::productTotalPrice($request->product_id),
            ]
        );
    }

    public function getProductsPrice(Request $request)
    {
        $products = $request->get('products', []);
        $totalPrice = 0;

        foreach ($products as $product) {
            $totalPrice += CartFacade::getProduct($product)->totalPrice();
        }

        return JsonResponse::create(
            [
                'price' => $totalPrice,
                'formatPrice' => PriceDecorator::format($totalPrice),
            ]
        );
    }
}