<?php

namespace App\Repositories\Blog;

use App\Extensions\Repositories\EloquentRepository;
use App\Models\Blog\Article;

class ArticlesRepository extends EloquentRepository
{
    public function getModelAlias()
    {
        return Article::class;
    }

    public static function getOnMain()
    {
        $instance = self::newInstance();

        return $instance->setItems($instance->newModelInstance()->newQuery()->where('status', '=', 1)->get());
    }
}