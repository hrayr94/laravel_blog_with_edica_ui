<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController');
});


Route::group(['prefix' => 'admin'], function () {
    Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
        Route::get('/', 'IndexController');
    });
});

Auth::routes();

