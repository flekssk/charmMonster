<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\InstagramUserLink;
use App\Models\User\VKUserLink;
use Laravel\Socialite\Contracts\User;
use Laravel\Socialite\Facades\Socialite;

class InstagramAuthController extends AbstractAuthController
{
    public function getDriverName()
    {
        return 'instagram';
    }

    public function putUser(User $user)
    {
        session()->put('user', InstagramUserLink::findOrCreateUser($user)->user_id);
    }
}