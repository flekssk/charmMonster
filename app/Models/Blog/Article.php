<?php

namespace App\Models\Blog;

use App\Models\Model;
use Illuminate\Support\Collection;

/**
 * Class Post
 * @package App\Models\Blog
 *
 * @property Collection $images
 */
class Article extends Model
{
    protected $table = 'article';

    public function images()
    {
        return $this->hasMany(ArticleImage::class);
    }

    public function delete()
    {
        foreach ($this->images as $file) {
            $file->delete();
        }

        return parent::delete();
    }

    public function imagesToSelector()
    {
        $images = collect();

        foreach ($this->images as $image) {
            $images->put($image->image, $image->image);
        }

        return $images;
    }

    public function imagesCommentsToSelector()
    {
        $comments = collect();

        foreach ($this->images as $image) {
            $comments->put($image->image, $image->comment);
        }

        return $comments;
    }

    public function description()
    {
        return $this->hasOne(ArticleDescription::class, 'article_id', 'article_id');
    }
}