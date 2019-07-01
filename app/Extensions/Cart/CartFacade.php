<?php

namespace App\Extensions\Cart;

use App\Repositories\Product\ProductRepository;
use Illuminate\Support\Facades\Facade;
use Illuminate\View\View;

/**
 * Class CartFacade
 * @package App\Extensions\Cart
 *
 * @method static ProductRepository getProducts()
 * @method static int productsCount()
 * @method static View renderWidget()
 */
class CartFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'cart';
    }

}