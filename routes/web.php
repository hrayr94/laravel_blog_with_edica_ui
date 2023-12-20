<?php

use Illuminate\Support\Facades\Route;

Route::group(['App\Http\Controllers\namespace' => 'Main'], function () {
    Route::get('/', [\App\Http\Controllers\Main\IndexController::class, '__invoke']);
});


Route::prefix('admin')->group(function () {
    Route::get('/', [\App\Http\Controllers\Admin\Main\IndexController::class, "__invoke"]);
    Route::prefix('categories')->group(function () {
        Route::get('/', [\App\Http\Controllers\Admin\Category\IndexController::class, "__invoke"])->name('admin.category.index');
        Route::get('/create', [\App\Http\Controllers\Admin\Category\CreateController::class, "__invoke"])->name('admin.category.create');
        Route::post('/', [\App\Http\Controllers\Admin\Category\StoreController::class, "__invoke"])->name('admin.category.store');
        Route::get('/{category}', [\App\Http\Controllers\Admin\Category\ShowController::class, "__invoke"])->name('admin.category.show');
        Route::get('/{category}/edit', [\App\Http\Controllers\Admin\Category\EditController::class, "__invoke"])->name('admin.category.edit');
        Route::patch('/{category}', [\App\Http\Controllers\Admin\Category\UpdateController::class, "__invoke"])->name('admin.category.update');
        Route::delete('/{category}', [\App\Http\Controllers\Admin\Category\DeleteController::class, "__invoke"])->name('admin.category.delete');
    });
});


Auth::routes();


