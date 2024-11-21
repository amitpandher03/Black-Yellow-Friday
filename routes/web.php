<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

// home
Route::get('/', [HomeController::class, 'index'])->name('home');

// products - public routes
Route::resource('products', ProductController::class)->only(['index', 'show'])->names('products');

// products - protected routes
Route::middleware('auth')->group(function () {      
    Route::resource('products', ProductController::class)->except(['index', 'show'])->names('products');
});
