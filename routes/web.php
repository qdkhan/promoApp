<?php

use App\Http\Controllers\ProductAttributeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('supplier.index');
});

Route::resource('/supplier', SupplierController::class);
Route::resource('/product', ProductController::class);
Route::resource('product_attribute', ProductAttributeController::class);


