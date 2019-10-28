<?php

use Illuminate\Support\Facades\Route;

Route::prefix('backend')
    ->group(function () {
        Route::prefix('catalog')->group(function () {
            Route::prefix('product')->group(function () {
                Route::get(
                    'complectationTab\{product}',
                    'Catalog\ProductController@complectationTab'
                );
                Route::post(
                    'storeComplectation',
                    'Catalog\ProductController@storeComplectation'
                );
                Route::post(
                    'storeComplectationCategory',
                    'Catalog\ProductController@storeComplectationCategory'
                );
                Route::post(
                    'storeSelectedComplectionProduct',
                    'Catalog\ProductController@storeSelectedComplectionProduct'
                );
                Route::delete(
                    'destroyComplection\{complectation}',
                    'Catalog\ProductController@destroyComplection'
                );
                Route::delete(
                    'destroyComplectionCategory\{complectationCategory}',
                    'Catalog\ProductController@destroyComplectionCategory'
                );
            });
        });
    });