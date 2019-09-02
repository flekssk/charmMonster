<?php

namespace App\Extensions\Payments;

use App\Extensions\Payments\Methods\YandexPayment;
use App\Extensions\Payments\Methods\SberbankPayment;
use App\Models\Order\Order;

class Payer
{
    const SBERBANK_ID = 1;
    const YANDEX_ID = 2;

    public static function getPayment(Order $order)
    {
        switch ($order->payment_method) {
            case 1:
                return new SberbankPayment($order);
                break;
            case 2:
                return new YandexPayment($order);
                break;
        }
    }
}