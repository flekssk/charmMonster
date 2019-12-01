<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::prefix('order')->group(
    function () {
        Route::any('history', 'Api\Order\OrderController@history')->middleware(['apiKey']);
        Route::post('yandexHandler', 'Api\Order\OrderController@yandexHandler')->middleware(['staticApiKey']);
    }
);