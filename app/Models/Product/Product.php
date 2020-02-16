<?php

namespace App\Models\Product;

use App\Models\Model;
use App\Repositories\Product\ProductComplectationRepository;
use Illuminate\Http\File;
use Illuminate\Support\Collection;

/**
 * Class Product
 *
 * @package App\Models\Product
 *
 * @property Collection $productAttributes
 * @property int product_id
 * @property ProductComplectationRepository $complectation
 * @property Category $category
 * @property ProductDescription $description
 */
class Product extends Model
{
    protected $table = 'product';

    protected $primaryKey = 'product_id';

    protected $route = 'Admin\Product\ProductController';

    public function getMainImage()
    {
        return new File($this->image);
    }

    public function images()
    {
        return $this->hasMany(ProductsImage::class, 'product_id', 'product_id');
    }

    /**
     * @return Category|\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null
     */
    public function getCategoryAttribute()
    {
        return ProductToCategory::findProductCategory($this->product_id);
    }

    public function description()
    {
        return $this->hasOne(ProductDescription::class, 'product_id', 'product_id');
    }

    public function imagesToSelector()
    {
        $images = collect();

        if ($this->image) {
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productAttributes()
    {
        return $this->hasMany(ProductAttribute::class, 'product_id');
    }

    /**
     * @return \App\Extensions\Repositories\BaseRepository
     */
    public function getComplectationAttribute()
    {
        return ProductComplectationRepository::getProductComplectation($this->product_id);
    }

    /**
     * @param Product[] $complection
     *
     * @return mixed
     */
    public function getFullPrice($complection = [])
    {
        $price = $this->price;

        $complection = !empty($complections) ? $complections : $this->getDefaultComplection();

        foreach ($complection as $product) {
            $price += $product->price;
        }

        return $price;
    }

    /**
     * @return Product[]
     */
    public function getDefaultComplection()
    {
        $defaultComplection = [];

        /** @var ProductComplectation $item */
        foreach ($this->complectation->items() as $complection) {
            $defaultComplection[] = $complection->categories->items()->first()->selectedProduct;
        }

        return $defaultComplection;
    }

    public function getDefaultComplectionJson()
    {
        $data = [];

        /** @var Product $product */
        foreach ($this->getDefaultComplection() as $product) {
            $data[] = $product->product_id;
        }

        return json_encode($data);
    }

    public function getIdWithComplection()
    {
        $id = $this->product_id;

        foreach ($this->getDefaultComplection() as $item) {
            $id .= $item->product_id;
        }

        return $id;
    }
}