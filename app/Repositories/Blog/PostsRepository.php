<?php

namespace App\Repositories\Blog;

use App\Extensions\Repositories\EloquentRepository;
use App\Models\Blog\Post;

class PostsRepository extends EloquentRepository
{
    public function getModelAlias()
    {
        return Post::class;
    }

    public static function getOnMain()
    {
        $instance = self::newInstance();

        return $instance->setItems($instance->newModelInstance()->newQuery()->where('active', '=', 1)->get());
    }
}