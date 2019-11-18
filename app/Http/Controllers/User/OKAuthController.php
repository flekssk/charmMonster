<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\OKUserLink;
use App\Models\User\VKUserLink;
use Laravel\Socialite\Contracts\User;
use Laravel\Socialite\Facades\Socialite;

class OKAuthController extends AbstractAuthController
{
    public function getDriverName()
    {
        return 'odnoklassniki';
    }

    public function putUser(User $user)
    {
        session()->put('user', OKUserLink::findOrCreateUser($user)->user_id);
    }
}