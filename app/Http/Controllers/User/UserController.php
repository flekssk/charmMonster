<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function authenticate(Request $request)
    {
        $text = $request->get('text', '');

        return JsonResponse::create(
            [
                'content' => view('auth.authenticate', compact('text'))->render(),
            ]
        );
    }

    public function logout()
    {
        session()->forget('user');

        return redirect('/');
    }
}