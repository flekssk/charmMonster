<?php

namespace App\Api\Middleware;

use Closure;
use Illuminate\Http\Request;

/**
 * Посредник для доступа по статичному ключу
 *
 * Class StaticApiKeyMiddleware
 *
 * @package App\Api\Middleware
 */
class StaticApiKeyMiddleware
{
    const API_STATIC_KEY = 'ecda8a86HhbsdHhgDfckjh976JVjh';

    public function handle(Request $request, Closure $next)
    {
        if(!$request->has('staticKey') || $request->staticKey != self::API_STATIC_KEY) {
            throw new \Exception('Do not has api key');
        }

        return $next($request);
    }
}