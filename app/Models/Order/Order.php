<?php

namespace App\Models\Order;

use App\Models\Model;

class Order extends Model
{
    const UPDATED_AT = 'date_modified';
    const CREATED_AT = 'date_added';

    protected $table = 'order';

    protected $primaryKey = 'order_id';

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class, 'order_id', 'order_id');
    }
}