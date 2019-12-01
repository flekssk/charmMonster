<?php

namespace App\Models\Order;

use App\Models\Model;

/**
 * Class Order
 *
 * @package App\Models\Order
 *
 * @property OrderStatus $orderStatus
 * @property int order_status_id
 */
class Order extends Model
{
    const STATUS_WAITING = 1;
    const STATUS_IN_PROCESS = 2;

    const UPDATED_AT = 'date_modified';
    const CREATED_AT = 'date_added';

    protected $table = 'order';

    protected $primaryKey = 'order_id';

    /**
     * @param $hash
     *
     * @return \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|self|object
     */
    public static function findByHash($hash)
    {
        $order = new Order();

        return $order->newQuery()
            ->where('hash', '=', $hash)
            ->first();
    }

    public function orderProducts()
    {
        return $this->hasMany(OrderProduct::class, 'order_id', 'order_id');
    }

    public function orderStatus()
    {
        return $this->hasOne(OrderStatus::class, 'order_status_id', 'order_status_id');
    }

    public function save(array $options = [])
    {
        if(!$this->exists) {
            $this->hash = md5(time() . config('app.key'));
        }

        return parent::save($options);
    }
}