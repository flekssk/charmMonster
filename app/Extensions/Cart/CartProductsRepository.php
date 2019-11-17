<?php

namespace App\Extensions\Cart;

use App\Extensions\Repositories\BaseRepository;
use App\Models\Order\OrderProduct;
use Illuminate\Support\Collection;

class CartProductsRepository extends BaseRepository
{
    public static function build(Collection $products)
    {
        $instance = self::newInstance();

        $items = collect();

        foreach ($products as $productId => $information) {
            $product = new CartProduct($productId);
            $product->setCount($information['count']);
            $items->put($productId, $product);
        }

        return $instance->setItems($items);
    }


    public function __construct($attributes = [])
    {
        $this->setItems(collect());

        return parent::__construct($attributes);
    }

    public function totalPrice()
    {
        $totalPrice = 0;

        /** @var CartProduct $item */
        foreach ($this->items()->all() as $item) {
            $totalPrice += $item->totalPrice();
        }

        return $totalPrice;
    }

    public function productsToOrder()
    {
        $products = [];

        /**
         * @var OrderProduct $item
         */
        foreach ($this->items->all() as $id => $item) {
            $products[] = $id;
        }

        return $products;
    }

    /**
     * @param array $ids
     *
     * @return BaseRepository|self
     */
    public function getByIds(array $ids)
    {
        $instance = self::newInstance();
        $items = collect();

        foreach ($ids as $id) {
            $items->put($id, $this->get($id));
        }

        return $instance->setItems($items);
    }
}