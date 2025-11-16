<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

Route::get('/', [ProductController::class, 'index']);
Route::get('products', [ProductController::class, 'index'])->name('products.index');
Route::get('products/{id}/{category?}', [ProductController::class, 'detail'])->name('products.detail');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/categories', [CategoryController::class, 'table'])->name('admin.categories.table');
    Route::get('/categories/create', [CategoryController::class, 'create'])->name('admin.categories.create');
    Route::post('/categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::delete('/categories/{category}', [CategoryController::class, 'delete'])->name('admin.categories.delete');

    Route::get('products/create', [ProductController::class, 'create'])->name('admin.products.create');
    Route::get('products', [ProductController::class, 'table'])->name('admin.products.table');
    Route::delete('/products/{product}', [ProductController::class, 'delete'])->name('products.delete');
    Route::post('products/store', [ProductController::class, 'store'])->name('admin.products.store');
});
