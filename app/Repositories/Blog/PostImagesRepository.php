<?php

namespace App\Repositories\Blog;

use App\Extensions\Repositories\EloquentRepository;
use App\Models\Blog\PostsImage;

class PostImagesRepository extends EloquentRepository
{

    public function getModelAlias()
    {
        return PostsImage::class;
    }
}