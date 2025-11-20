<?php

use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::view('/', 'welcome');
Route::get('/produk', [ProdukController::class, 'index']);
