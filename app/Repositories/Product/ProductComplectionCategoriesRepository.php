<?php

namespace App\Repositories\Product;

use App\Extensions\Repositories\EloquentRepository;
use App\Models\Product\ProductComplectationCategory;

class ProductComplectionCategoriesRepository extends EloquentRepository
{
    public function getModelAlias()
    {
        return ProductComplectationCategory::class;
    }

    public static function findByComplectionId($complectionId)
    {
        $instance = self::newInstance();

        $items = $instance->newModelInstance()
            ->newQuery()
            ->where('complection_id', '=', $complectionId)
            ->get();

        return $instance->setItems($items);
    }
}