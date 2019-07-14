<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\InstagramUserLink;
use App\Models\User\VKUserLink;
use Laravel\Socialite\Facades\Socialite;

class InstagramAuthController extends Controller
{
    public function redirectToProvider()
    {
        return Socialite::driver('instagram')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('instagram')->user();

        session()->put('user', InstagramUserLink::findOrCreateUser($user)->user_id);

        return redirect('/');
    }
}