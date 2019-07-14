<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\AdminController;
use App\Models\User\VKUser;

class UserController extends AdminController
{
    public function index()
    {

    }

    public function show(VKUser $user)
    {

    }

    public function destroy(VKUser $user)
    {
        $user->delete();

        return redirect(route(''));
    }
}