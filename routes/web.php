<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@index');

Route::prefix('product')->group(
    function () {
        Route::get('/', 'Product\ProductController@index');
        Route::get('show/{product}', 'Product\ProductController@show');
        Route::get('fastLook/{product}', 'Product\ProductController@fastLook');
    });

Route::prefix('categories')->group(
    function () {
        Route::get('products/{category}', 'Product\CategoryController@products');
    });

Route::prefix('order')->group(
    function () {
        Route::get('/', 'Order\OrderController@index');
        Route::post('store', 'Order\OrderController@store');
        Route::get('success/{order}', 'Order\OrderController@success');
        Route::get('show/{order}', 'Order\OrderController@show');
        Route::get('showByHash/{hash}', 'Order\OrderController@showByHash');
        Route::post('cardPaymentCallback', 'Order\OrderController@cardPaymentCallback');
        Route::get('yandexSuccess/{order}', 'Order\OrderController@yandexSuccess');
        Route::get('yandexError/{order}', 'Order\OrderController@yandexError');
        Route::get('sberbankOrder/{order}', 'Order\OrderController@sberbankOrder');
    });

Route::prefix('cart')->group(
    function () {
        Route::get('/', 'Order\CartController@index');
        Route::post('addToCart', 'Order\CartController@addToCart')->middleware([]);
        Route::delete('removeFromCart', 'Order\CartController@removeFromCart')->middleware([]);
        Route::post('changeCount', 'Order\CartController@changeCount')->middleware([]);
    }
);

Route::prefix('blog')->group(
    function () {
        Route::get('/', 'Blog\BlogController@index');
        Route::get('show/{article}', 'Blog\BlogController@show');
    }
);

Route::get('login/vk', 'User\VKAuthController@redirectToProvider');
Route::get('login/vk/callback', 'User\VKAuthController@handleProviderCallback');

Route::get('login/instagram', 'User\InstagramAuthController@redirectToProvider');
Route::get('login/instagram/callback', 'User\InstagramAuthController@handleProviderCallback');

Route::get('login/authenticate', 'User\UserController@authenticate');
Route::get('login/logout', 'User\UserController@logout');


Route::prefix('backend')->namespace('')
    ->group(function () {
        Route::prefix('catalog')->group(function () {
            Route::prefix('product')->group(function () {
                Route::get(
                    'complectationTab',
                    'Backend\Http\ControllersCatalog\Product@complectationTab'
                );
                Route::post('addComplectation');
            });
        });
    });