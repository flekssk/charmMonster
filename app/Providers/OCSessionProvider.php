<?php

namespace App\Providers;

use App\Models\User\OCSession;
use Illuminate\Support\ServiceProvider;

class OCSessionProvider extends ServiceProvider
{
    public function register()
    {
        app()->singleton('ocSession', function () {
            return OCSession::finBySessionId(request()->cookie('OCSESSID', null));
        });
    }
}