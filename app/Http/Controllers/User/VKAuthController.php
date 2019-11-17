<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\VKUserLink;
use Laravel\Socialite\Contracts\User;
use Laravel\Socialite\Facades\Socialite;

class VKAuthController extends AbstractAuthController
{
    public function getDriverName()
    {
        return 'vkontakte';
    }

    public function putUser(User $user)
    {
        session()->put('user', VKUserLink::findOrCreateUser($user)->user_id);
    }
}