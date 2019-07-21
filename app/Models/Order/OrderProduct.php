<?php

namespace App\Models\Order;

use App\Models\Model;
use App\Models\Product\Product;

class OrderProduct extends Model
{
    const CREATED_AT = null;
    const UPDATED_AT = null;

    protected $table = 'order_product';

    protected $primaryKey = 'order_product_id';

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->hasOne(Product::class, 'product_id', 'product_id');
    }
}