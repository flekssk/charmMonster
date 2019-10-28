<?php

namespace App\Repositories\Product;

use App\Extensions\Repositories\EloquentRepository;
use App\Models\Product\ProductComplectation;

class ProductComplectationRepository extends EloquentRepository
{
    public static function getProductComplectation($productId)
    {
        $instance = self::newInstance();

        $items = $instance
            ->newModelInstance()
            ->newQuery()
            ->where('product_id', $productId)
            ->get();

        return $instance->setItems($items);
    }

    public function getModelAlias()
    {
        return ProductComplectation::class;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getCategories()
    {
        return $this->items->unique('category_id');
    }
}
