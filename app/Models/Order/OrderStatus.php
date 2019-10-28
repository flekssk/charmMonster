<?php

namespace App\Models\Order;

use App\Models\Model;

class OrderStatus extends Model
{
    const UPDATED_AT = null;
    const CREATED_AT = null;

    const WAITING_PAYMENT_STATUS = 1;
    const CANCELED_STATUS = 2;
    const ARRIVED_STATUS = 3;
    const DISPATCHED_STATUS = 2;

    public static $orderMapping = [
        1 => 'Ожидает оплаты',
        2 => 'Отмена',
        3 => 'Отправлено',
        4 => 'Выполнен',
        5 => 'Обработка',
    ];

    protected $table = 'order_status';

    protected $primaryKey = 'order_status_id';
}