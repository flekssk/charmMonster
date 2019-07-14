<?php

namespace App\Extensions\Cart;

use Illuminate\Support\Facades\Session;

class Cart
{
    /** @var CartProductsRepository */
    protected $products;

    public function __construct(CartProductsRepository $products)
    {
        $this->products = $products;
    }

    public function renderWidget()
    {
        return view('widgets.cart', ['products' => $this->products]);
    }

    public function productsCount()
    {
        return $this->products->count();
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function totalPrice()
    {
        return $this->products->totalPrice();
    }

    public function productTotalPrice($productId)
    {
        return $this->products->get($productId)->totalPrice();
    }

    public function addProduct($productId)
    {
        if ($this->products->has($productId)) {
            /** @var CartProduct $product */
            $product = $this->products->get($productId);
            $product->increaseProduct();
        } else {
            $product = new CartProduct($productId);
        }

        $this->products->put($productId, $product);
        $this->saveCart();
    }

    public function removeProduct($productId)
    {
        $this->products->items()->forget($productId);
        $this->saveCart();
    }

    public function increaseProduct($productId)
    {
        $this->getProduct($productId)->increaseProduct();
        $this->saveCart();
    }

    public function reduceProduct($productId)
    {
        $this->getProduct($productId)->reduceProduct();

        $this->saveCart();
    }

    public function changeProductCount($productId, $count)
    {
        $this->products->get($productId)->setCount($count);

        $this->saveCart();
    }

    public function saveCart()
    {
        Session::forget('cart.products');
        Session::put('cart.products', $this->products);
    }

    /**
     * @param $id
     * @return CartProduct
     */
    public function getProduct($id)
    {
        return $this->products->get($id);
    }
}