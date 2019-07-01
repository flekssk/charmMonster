<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@index');

Route::get('products', 'Product\ProductController@index');

Route::prefix('categories')->group(function () {
    Route::get('products/{category}', 'Product\CategoryController@products');
});

Route::prefix('order')->group(function () {

});

Route::prefix('cart')->group(function () {
   Route::post('addToCart', 'Order\CartController@addToCart')->middleware([]);
   Route::delete('removeFromCart', 'Order\CartController@removeFromCart')->middleware([]);
});