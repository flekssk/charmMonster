<?php

namespace App\Extensions\Payments\Methods;

class SberbankPayment extends Payment
{
    public function pay()
    {
        return action('Order\OrderController@sberbankOrder', ['order' => $this->order->id]);
    }

    public function getPaymentStatus()
    {

    }

    public function getRedirectUrl()
    {
        return action('Order\OrderController@sberbankOrder', ['order' => $this->order->id]);
    }
}