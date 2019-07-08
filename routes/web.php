<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@index');

Route::prefix('product')->group(function () {
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

    });

Route::prefix('cart')->group(
    function () {
        Route::get('/', 'Order\CartController@index');
        Route::post('addToCart', 'Order\CartController@addToCart')->middleware([]);
        Route::delete('removeFromCart', 'Order\CartController@removeFromCart')->middleware([]);
    });