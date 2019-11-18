<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Contracts\User;

abstract class AbstractAuthController extends Controller
{
    abstract public function getDriverName();

    abstract public function putUser(User $user);

    public function redirectToProvider(Request $request)
    {
        session()->put('authenticateReferrer', $request->server('HTTP_REFERER'));

        return Socialite::driver($this->getDriverName())->redirect();
    }

    /**
     * Obtain the user information from driver.
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver($this->getDriverName())->user();

        $this->putUser($user);

        return redirect(session('authenticateReferrer', '/'));
    }
}