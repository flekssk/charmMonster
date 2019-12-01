<?php

namespace App\Providers;

use App\Extensions\Log\Loggers\RequestLogger;
use Illuminate\Support\ServiceProvider;
use Mockery\Container;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        app()->singleton(\Mobile_Detect::class);
        app()->singleton(RequestLogger::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
