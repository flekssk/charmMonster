<?php

namespace App\Extensions\Cart;

use App\Repositories\Product\ProductRepository;

class Cart
{
    /** @var ProductRepository  */
    protected $products;

    public function __construct(ProductRepository $products)
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
}