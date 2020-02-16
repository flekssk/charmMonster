<?php

namespace App\Extensions\Payments\Methods;

use App\Models\Order\OrderProduct;
use App\Models\Product\Product;
use YandexCheckout\Client;
use YandexCheckout\Request\Payments\CreatePaymentResponse;

class YandexPayment extends Payment
{
    /** @var CreatePaymentResponse */
    protected $paymentResponse;

    public function pay()
    {
        $client = new Client();
        $client->setAuth(
            env('YANDEX_SHOP_ID'),
            env('YANDEX_API_KEY')
        );

        $products = [];

        /** @var OrderProduct $orderProduct */
        foreach ($this->order->orderProducts as $orderProduct) {
            /** @var Product $product */
            $products[] = [
                'description' => $orderProduct->product->description->name,
                'quantity' => $orderProduct->quantity,
                'vat_code' => 1,
                'payment_mode' => 'full_prepayment',
                'payment_subject' => 'commodity',
                'amount' => [
                    'value' => $orderProduct->total,
                    'currency' => 'RUB',
                ],
            ];
        }

        /** @var CreatePaymentResponse payment */
        $this->paymentResponse = $client->createPayment(
            [
                'amount' => [
                    'value' => $this->order->total,
                    'currency' => 'RUB',
                ],
                'confirmation' => [
                    'type' => 'redirect',
                    'return_url' => 'charmkupi.site/order/showByHash/' . $this->order->hash,
                ],
                'receipt' => [
                    "customer" => [
                        "full_name" => $this->order->firstname . ' ' . $this->order->lastname,
                        "phone" => $this->order->telephone,
                    ],
                    'items' => $products,
                ],
                'capture' => true,
                'description' => 'Заказ',
            ],
            uniqid('', true)
        );

        $yandexOrder = new \App\Models\Order\YandexPayment();
        $yandexOrder->order_id = $this->order->order_id;
        $yandexOrder->yandex_order_id = $this->paymentResponse->id;
        $yandexOrder->hash = $this->order->hash;

        $yandexOrder->save();

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