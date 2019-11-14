<?php

namespace App\Models\Product;

use App\Models\Model;

/**
 * Class ProductToCategory
 *
 * @package App\Models\Product
 *
 * @property Category $category
 */
class ProductToCategory extends Model
{
    protected $table = 'product_to_category';

    /**
     * @param int $productId
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object|null|Category
     */
    public static function findProductCategory($productId)
    {
        $instance = new static();

        return $instance->newQuery()
            ->where('product_id', '=', $productId)
            ->first();
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'category_id', 'category_id');
    }
}