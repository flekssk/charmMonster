<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\VKUserLink;
use Laravel\Socialite\Facades\Socialite;

class VKAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('vkontakte')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('vkontakte')->user();

        session()->put('user', VKUserLink::findOrCreateUser($user)->user_id);

        return redirect('/');
    }
}