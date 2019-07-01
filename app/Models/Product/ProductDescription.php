<?php

namespace App\Models\Product;

use App\Models\Model;

class ProductDescription extends Model
{
    protected $table = 'product_description';

    public function getTagsAttribute()
    {
        return collect($this->tag ? explode(',', $this->tag) : []);
    }
}