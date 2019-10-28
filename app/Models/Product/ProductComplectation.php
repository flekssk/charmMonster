<?php

namespace App\Models\Product;

use App\Models\Model;
use App\Repositories\Product\ProductComplectionCategoriesRepository;

/**
 * Class ProductComplectation
 *
 * @package App\Models\Product
 *
 * @property ProductComplectionCategoriesRepository $categories
 * @property int $selected_product_id
 */
class ProductComplectation extends Model
{
    /**
     * @return \App\Extensions\Repositories\BaseRepository
     */
    public function getCategoriesAttribute()
    {
        return ProductComplectionCategoriesRepository::findByComplectionId($this->id);
    }
}