<?php

namespace App\Extensions\Payments\Methods;

use App\Extensions\Payments\Contracts\PaymentMethod;

class SberbankPayment implements PaymentMethod
{
    public function pay()
    {
        return true;
    }

    public function getPaymentStatus()
    {

    }
}