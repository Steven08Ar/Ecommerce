<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/products/{id}/{category?}', function ($id, $category = null) {

    if ($category != null) {

        return 'Details products: ' . $id . ' Category: ' . $category;
    } else {
        return 'Details products: ' . $id;
    }
})->name('product');
