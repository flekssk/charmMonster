<?php

namespace App\Models\Product;

use App\Models\Model;

/**
 * Class ProductDescription
 *
 * @package App\Models\Product
 *
 * @property string $name
 */
class ProductDescription extends Model
{
    protected $table = 'product_description';

    public function getTagsAttribute()
    {
        return collect($this->tag ? explode(',', $this->tag) : []);
    }
}