<?php

namespace App\Models\Product;

use App\Models\Model;

class Liked extends Model
{
    protected $table = 'liked';

    public function product()
    {
        return $this->hasOne(Product::class, 'product_id', 'product_id');
    }
}