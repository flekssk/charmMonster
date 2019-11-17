<?php

namespace App\Repositories\Product;

use App\Extensions\Repositories\EloquentRepository;
use App\Models\Product\Liked;

class LikedRepository extends EloquentRepository
{
    public static function getUserLiked($userId)
    {
        $instance = self::newInstance();

        $items = $instance->newModelInstance()
            ->newQuery()
            ->where('user_id', '=', $userId)
            ->get();

        return $instance->setItems($items);
    }

    public function getModelAlias()
    {
        return Liked::class;
    }

    /**
     * @return \App\Extensions\Repositories\BaseRepository|ProductRepository
     */
    public function getProductsRepository()
    {
        $productsIds = $this->items()->all();

        foreach ($this->items()->all() as $item) {
            $productsIds[] = $item->product_id;
        }

        return ProductRepository::getByIds($productsIds);
    }
}