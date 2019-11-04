<?php

namespace App\Extensions\Cart;

use Illuminate\Support\Facades\Facade;
use Illuminate\View\View;
use phpDocumentor\Reflection\Types\Static_;

/**
 * Class CartFacade
 * @package App\Extensions\Cart
 *
 * @method static CartProductsRepository getProducts()
 * @method static int productsCount()
 * @method static View renderWidget()
 * @method static float totalPrice()
 * @method static View productTotalPrice(int $productId)
 * @method static View increaseProduct(int $productId)
 * @method static View reduceProduct(int $productId)
 * @method static View addProduct(CartProduct $product)
 * @method static View removeProduct(int $productId)
 * @method static View changeProductCount(int $productId, int $count)
 * @method static CartProduct|null getProduct(int $productId)
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