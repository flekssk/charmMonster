<?php

namespace App\Api\Middleware;

use App\Extensions\Log\Loggers\RequestLogger;
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
        /** @var RequestLogger $requestLogger */
        $requestLogger = app(RequestLogger::class);

        if(!$request->has('staticKey') || $request->staticKey != self::API_STATIC_KEY) {
            $requestLogger->log('warning', json_encode($request->toArray()), ['type' => 'invalidKey']);

            throw new \Exception('Do not has api key');
        }

        $requestLogger->log('info', json_encode($request->toArray()), ['type' => 'access']);

        return $next($request);
    }
}