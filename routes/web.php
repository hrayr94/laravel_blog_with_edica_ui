<?php

use Illuminate\Support\Facades\Route;

Route::group(['App\Http\Controllers\namespace' => 'Main'], function () {
    Route::get('/', [\App\Http\Controllers\Main\IndexController::class, '__invoke']);
});


Route::prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\Main\IndexController::class, "__invoke"]);
    Route::get('/categories', [\App\Http\Controllers\Admin\Category\IndexController::class, "__invoke"])->name('admin.category.index');
    Route::get('/categories/create', [\App\Http\Controllers\Admin\Category\CreateController::class, "__invoke"])->name('admin.category.create');
});


Auth::routes();


