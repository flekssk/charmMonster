<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\AdminController;
use App\Models\User\User;

class UserController extends AdminController
{
    public function index()
    {

    }

    public function show(User $user)
    {

    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect(route(''));
    }
}