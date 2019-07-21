<?php

namespace App\Models\Order;

use App\Models\Model;

class OrderHistory extends Model
{
    const CREATED_AT = 'date_added';
    const UPDATED_AT = null;

    protected $table = 'order_history';

    protected $primaryKey = 'order_history_id';
}