<?php

namespace App\Models\Product;

use App\Models\Model;
use App\Repositories\Product\ProductRepository;

/**
 * Class ProductComplectationCategory
 *
 * @package App\Models\Product
 *
 * @property ProductRepository $products
 * @property Category $category
 * @property Product $selectedProduct
 */
class ProductComplectationCategory extends Model
{
    public $timestamps = null;

    protected $table = 'product_complection_category';

    /**
     * @param $complectionId
     * @param $categoryId
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|ProductComplectationCategory|null
     */
    public static function getByComplectionAndCategory($complectionId, $categoryId)
    {
        return (new self)->newQuery()
            ->where('category_id', '=', $categoryId)
            ->where('complection_id', '=', $complectionId)
            ->first();
    }

    public function getProductsAttribute()
    {
        return ProductRepository::getFromCategory($this->category_id);
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'category_id', 'category_id');
    }

    /**
     * @return Product
     */
    public function getSelectedProductAttribute()
    {
        return $this->products->get($this->getSelectedProductId());
    }

    public function getSelectedProductId()
    {
        return $this->selected_product_id > 0 ? $this->selected_product_id : $this->products->items()->first()->product_id;
    }

    public function getSelectedClass($productId)
    {
        return $this->getSelectedProductId() ==  $productId ? 'selected' : '';
    }
}