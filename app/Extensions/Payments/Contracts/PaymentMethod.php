<?php

namespace App\Extensions\Payments\Contracts;

interface PaymentMethod
{
    public function pay();

    public function getRedirectUrl();

    public function getPaymentStatus();
}