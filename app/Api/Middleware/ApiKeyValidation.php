<?php

namespace App\Api\Middleware;

use App\Models\User\OCSession;
use Closure;

class ApiKeyValidation
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     *
     * @return mixed
     * @throws \Exception
     */
    public function handle($request, Closure $next)
    {
        if(!app('ocSession')->isHasUserToken()) {
            throw new \Exception('Do not has api key');
        }

        return $next($request);
    }

}