<?php

namespace App\Extensions\Payments\Methods;

use YandexCheckout\Client;

class YandexPayment extends Payment
{
    public function pay()
    {
        $client = new Client();
        $client->setAuth(634638, 'test_yd4wnUcDuz49p-23R152H3bouRFv0opeDFl_8PzyLJU');

        $payment = $client->createPayment(
            array(
                'amount' => array(
                    'value' => $this->order->total,
                    'currency' => 'RUB',
                ),
                'confirmation' => array(
                    'type' => 'redirect',
                    'return_url' => 'flessess.beget.tech/cardPaymentCallback/' . $this->order->id,
                ),
                'capture' => true,
                'description' => 'Заказ №1',
            ),
            uniqid('', true)
        );

        return $payment->getConfirmation()->getConfirmationUrl();
    }

    public function getPaymentStatus()
    {

    }
}