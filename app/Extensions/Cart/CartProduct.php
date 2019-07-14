<?php

namespace App\Extensions\Cart;

use App\Models\Product\Product as ProductModel;

class CartProduct
{
    /** @var CartProduct */
    public $product;
    /** @var int */
    public $count = 1;

    /**
     * Product constructor.
     * @param $productId
     * @throws \Exception
     */
    public function __construct($productId)
    {
        $this->product = ProductModel::find($productId);

        if(is_null($this->product)) {
            throw new \Exception('Given product not existed');
        }
    }

    public function getId()
    {
        return $this->product->product_id;
    }

    public function increaseProduct()
    {
        $this->count++;
    }

    public function reduceProduct()
    {
        $this->count--;
    }

    public function totalPrice()
    {
        return $this->product->price * $this->count;
    }

    public function setCount(int $count)
    {
        if($count > 0) {
            $this->count = $count;
        }
    }
}