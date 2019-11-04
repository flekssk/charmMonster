<?php

namespace App\Extensions\Payments\Methods;

use App\Models\Order\Order;
use YandexCheckout\Client;
use YandexCheckout\Request\Payments\CreatePaymentResponse;

class YandexPayment extends Payment
{
    /** @var CreatePaymentResponse */
    protected $paymentResponse;

    public function pay()
    {
        $client = new Client();
        $client->setAuth(634638, 'test_yd4wnUcDuz49p-23R152H3bouRFv0opeDFl_8PzyLJU');

        /** @var CreatePaymentResponse payment */
        $this->paymentResponse = $client->createPayment(
            [
                'capture' => true,
                'amount' => [
                    'value' => $this->order->total,
                    'currency' => 'RUB',
                ],
                'confirmation' => [
                    'type' => 'redirect',
                    'return_url' => 'charmkupi.site/order/showByHash/' . $this->order->hash,
                ],
                'description' => 'Заказ',
            ],
            uniqid('', true)
        );

        return true;
    }

    public function getPaymentStatus()
    {

    }

    public function getRedirectUrl()
    {
        return $this->paymentResponse
            ->getConfirmation()
            ->getConfirmationUrl();
    }
}