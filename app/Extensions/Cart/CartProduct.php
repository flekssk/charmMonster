<?php

namespace App\Extensions\Cart;

use App\Models\Product\Product;

class CartProduct
{
    /** @var Product */
    public $product;
    /** @var int */
    public $count = 1;
    /** @var Product[] */
    public $complection;

    /**
     * Product constructor.
     * @param Product $product
     * @throws \Exception
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
        $this->complection = [];
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
        return ($this->product->price + $this->getComplectionPrice()) * $this->count;
    }

    public function getComplectionPrice()
    {
        $price = 0;

        /** @var Product $this */
        foreach ($this->complection as $product) {
            $price += $product->price;
        }

        return $price;
    }

    public function setCount(int $count)
    {
        if($count > 0) {
            $this->count = $count;
        }
    }

    /**
     * @param Product[] $complection
     */
    public function addComplection(array $complection)
    {
        $this->complection = empty($complection) ? $this->product->getDefaultComplection() : $complection;;
    }

    public function getUniqueId()
    {
        return $this->product->product_id . $this->getComplectionUniqueKey();
    }

    public function getComplectionUniqueKey()
    {
        $key = '';

        /**
         * @var Product $item
         */
        foreach ($this->complection as $item) {
            $key .= $item->product_id;
        }

        return $key;
    }
}