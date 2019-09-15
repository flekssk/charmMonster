<?php

namespace App\Extensions\Payments\Methods;

use App\Models\Order\Order;
use YandexCheckout\Client;

class YandexPayment extends Payment
{
    protected $payment;

    public function __construct(Order $order)
    {
        parent::__construct($order);

        $this->setPayment();
    }

    public function pay()
    {
        return true;
    }

    public function getPaymentStatus()
    {

    }

    protected function setPayment()
    {
        $client = new Client();
        $client->setAuth(634638, 'test_yd4wnUcDuz49p-23R152H3bouRFv0opeDFl_8PzyLJU');

        $this->payment = $client->createPayment(
            array(
                'amount' => array(
                    'value' => $this->order->total,
                    'currency' => 'RUB',
                ),
                'confirmation' => array(
                    'type' => 'redirect',
                    'return_url' => 'charmkupi.site/cardPaymentCallback/' . $this->order->id,
                ),
                'capture' => true,
                'description' => 'Заказ №1',
            ),
            uniqid('', true)
        );
    }

    public function getRedirectUrl()
    {
        return $this->payment->getConfirmation()->getConfirmationUrl();
    }
}