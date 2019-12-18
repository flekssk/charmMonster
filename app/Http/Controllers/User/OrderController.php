<?php

namespace App\Http\Controllers\User;

use App\Extensions\User\CharmUser;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function orders()
    {
        return view('user.orders', ['orders' => CharmUser::get()->orders]);
    }
}