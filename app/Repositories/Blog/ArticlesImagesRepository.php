<?php

namespace App\Repositories\Blog;

use App\Extensions\Repositories\EloquentRepository;
use App\Models\Blog\ArticleImage;

class ArticlesImagesRepository extends EloquentRepository
{

    public function getModelAlias()
    {
        return ArticleImage::class;
    }
}