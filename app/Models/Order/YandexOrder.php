<?php

namespace App\Models\Order;

use App\Models\Model;

/**
 * Class YandexPayment
 *
 * @package App\Models\Order
 *
 * @property Order $order
 */
class YandexPayment extends Model
{
    /**
     * @param $yandexOrderId
     *
     * @return self
     */
    public static function findByYandexOrderId($yandexOrderId)
    {
        return (new static())
            ->newQuery()
            ->where('yandex_order_id', '=', $yandexOrderId)
            ->get()
            ->first();
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'order_id');
    }
}