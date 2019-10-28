<?php

namespace App\Extensions\Cart;

use Illuminate\Support\Facades\Facade;
use Illuminate\View\View;

/**
 * Class CartFacade
 * @package App\Extensions\Cart
 *
 * @method static CartProductsRepository getProducts()
 * @method static int productsCount()
 * @method static View renderWidget()
 * @method static View totalPrice()
 * @method static View productTotalPrice(int $productId)
 * @method static View increaseProduct(int $productId)
 * @method static View reduceProduct(int $productId)
 * @method static View addProduct(CartProduct $product)
 * @method static View removeProduct(int $productId)
 * @method static View changeProductCount(int $productId, int $count)
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