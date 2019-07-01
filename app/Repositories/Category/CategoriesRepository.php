<?php

namespace App\Repositories\Category;

use App\Extensions\Repositories\EloquentRepository;
use App\Models\Product\Category;

class CategoriesRepository extends EloquentRepository
{

    public static function getBase()
    {
        $instance = self::newInstance();

        $instance->setItems($instance->newModelInstance()->newQuery()->whereNull('parent_id')->get());

        return $instance;
    }

    public function getModelAlias()
    {
        return Category::class;
    }

    public static function getOnMain()
    {
        $instance = self::newInstance();

        return $instance->setItems($instance->newModelInstance()->newQuery()->where('top', '=', 1)->get());
    }
}