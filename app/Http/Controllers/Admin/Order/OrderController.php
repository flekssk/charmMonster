<?php

namespace App\Http\Controllers\Admin\Order;

use  App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;

class OrderController extends AdminController
{
    public function index(Request $request)
    {
        return view('admin.order.index');
    }
}