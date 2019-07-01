<?php

namespace App\Extensions\Cart;

use App\Repositories\Product\ProductRepository;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{
    public function boot()
    {
        app()->singleton(
            'cart', function () {
            return new Cart(ProductRepository::getByIds(Session::get('cart.products', collect())));
        });
    }
}