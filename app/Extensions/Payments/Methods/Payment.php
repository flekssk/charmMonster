<?php

namespace App\Extensions\Payments\Methods;

use App\Extensions\Payments\Contracts\PaymentMethod;
use App\Models\Order\Order;

abstract class Payment implements PaymentMethod
{
    /** @var Order */
    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }
}