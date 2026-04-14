<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});

Route::get('/barang', [BarangController::class, 'tampilkan']);
?>
