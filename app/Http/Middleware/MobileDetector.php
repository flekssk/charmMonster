<?php

namespace App\Http\Middleware;

use Closure;
use Detection\MobileDetect;
use Illuminate\Support\Facades\View;

class MobileDetector
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     *
     * @param MobileDetect $detector
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(app(\Mobile_Detect::class)->isMobile()) {
            $finder = new \Illuminate\View\FileViewFinder(app()['files'], array(app()->basePath().'/resources/views/mobile/'));
            View::setFinder($finder);
        }

        return $next($request);
    }

}