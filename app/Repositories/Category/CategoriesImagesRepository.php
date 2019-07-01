<?php

namespace App\Repositories\Category;

use App\Extensions\Repositories\EloquentRepository;
use App\Models\Product\CategoriesImage;

class CategoriesImagesRepository extends EloquentRepository
{
    public function getModelAlias()
    {
        return CategoriesImage::class;
    }
}