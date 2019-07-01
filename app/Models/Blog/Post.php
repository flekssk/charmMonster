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
class Post extends Model
{
    public function images()
    {
        return $this->hasMany(PostsImage::class);
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
}