<?php

namespace App\Api\Controllers\Order;

use App\Extensions\Log\Loggers\RequestLogger;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function history(Request $request)
    {

    }

    public function yandexHandler(Request $request)
    {
        /** @var RequestLogger $logger */
        $logger = app(RequestLogger::class);

        $logger->log('info', json_encode($request->toArray()), ['type' => 'yandexPayment']);
    }
}