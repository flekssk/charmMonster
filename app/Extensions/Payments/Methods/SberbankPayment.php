<?php

namespace App\Extensions\Payments\Methods;

class SberbankPayment extends Payment
{
    public function pay()
    {
        return $this->getRedirectUrl();
    }

    public function getPaymentStatus()
    {

    }

    public function getRedirectUrl()
    {
        return action('Order\OrderController@sberbankOrder', ['order' => $this->order->order_id]);
    }
}