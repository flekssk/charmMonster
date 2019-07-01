<?php

namespace App\Models\Product;

use App\Models\Model;
use Illuminate\Http\File;
use Illuminate\Support\Collection;

class Product extends Model
{
    protected $table = 'product';

    protected $route = 'Admin\Product\ProductController';

    public function getMainImage()
    {
        return new File($this->image);
    }

    public function images()
    {
        return $this->hasMany(ProductsImage::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function description()
    {
        return $this->hasOne(ProductDescription::class, 'product_id', 'product_id');
    }

    public function imagesToSelector()
    {
        $images = collect();

        if($this->image) {
            $images->put($this->image, $this->image);
        }

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