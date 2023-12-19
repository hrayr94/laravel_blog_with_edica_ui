<?php

use Illuminate\Support\Facades\Route;

Route::group(['App\Http\Controllers\namespace' => 'Main'], function () {
    Route::get('/', [\App\Http\Controllers\Main\IndexController::class, '__invoke']);
});


Route::prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\Main\IndexController::class, "__invoke"]);
});


Auth::routes();


