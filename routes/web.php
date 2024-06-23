<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('supplier.index');
});

Route::resource('/supplier', SupplierController::class);
Route::resource('/product', ProductController::class);


