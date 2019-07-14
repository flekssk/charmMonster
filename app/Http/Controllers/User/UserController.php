<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    public function authenticate()
    {
        return JsonResponse::create(['content' => view('auth.authenticate')->render()]);
    }

    public function logout()
    {
        session()->forget('user');

        return redirect('/');
    }
}