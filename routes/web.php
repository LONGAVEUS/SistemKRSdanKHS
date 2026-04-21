<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome'); // atau view lain yang sudah kamu buat
});


Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});

Route::get('/image', function () {
    return view('image');
});

Route::get('/barang', [BarangController::class, 'tampilkan']);
Route::get('/customer', [CustomerController::class, 'tampilkan']);
Route::get('/order', [OrderController::class, 'tampilkan']);
Route::get('/product', [ProductController::class, 'tampilkan']);
?>
