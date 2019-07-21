<?php

namespace App\Http\Controllers\Api\Order;

use App\Http\Controllers\Controller;
use App\Models\Order\Order;
use App\Models\Order\OrderHistory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function history(Request $request)
    {
        $order                  = Order::find($request->order_id);
        $order->order_status_id = $request->order_status_id;
        $order->save();

        $orderHistory = new OrderHistory();

        $orderHistory->order_id        = $order->order_id;
        $orderHistory->order_status_id = $request->order_status_id;
        $orderHistory->comment         = $request->comment ?? ' ';
        $orderHistory->notify          = $request->notify;

        $orderHistory->save();

        return JsonResponse::create(['success' => true]);
    }
}