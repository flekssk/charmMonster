<?php

namespace App\Repositories\Content;

use App\Extensions\Repositories\EloquentRepository;
use App\Models\Content\MainSliderImage;

class MainSliderImagesRepository extends EloquentRepository
{
    public static function getBySliderId($id)
    {
        $instance = self::newInstance();

        $items = $instance->newModelInstance()
            ->newQuery()
            ->where('banner_id', '=', $id)
            ->get();

        return $instance->setItems($items);
    }

    public function getModelAlias()
    {
        return MainSliderImage::class;
    }
}