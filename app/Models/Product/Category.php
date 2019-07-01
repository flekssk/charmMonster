<?php

namespace App\Models\Product;

use App\Models\Model;
use App\Repositories\Product\ProductRepository;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class Category
 * @package App\Models\Product
 *
 * @property Collection $images
 */
class Category extends Model
{

    protected $table = 'category';

    protected $primaryKey = 'category_id';

    public function parent()
    {
        return $this->belongsTo(self::class);
    }

    public function childs()
    {
        return $this->hasMany(self::class);
    }

    public function images()
    {
        return $this->hasMany(CategoriesImage::class);
    }

    public function getProductsAttribute()
    {
        return ProductRepository::getFormCategory($this->category_id);
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

    public function description()
    {
        return $this->hasOne(CategoryDescription::class, 'category_id', 'category_id');
    }
}