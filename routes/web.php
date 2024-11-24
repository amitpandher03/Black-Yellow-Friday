<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\ProfileController;
// home
Route::get('/', [HomeController::class, 'index'])->name('home');

// products - protected routes
Route::middleware('auth')->group(function () {      
    Route::resource('products', ProductController::class)->except(['index', 'show'])->names('products');
});

// products - public routes
Route::resource('products', ProductController::class)->only(['index', 'show'])->names('products');

// cart
Route::middleware(['auth'])->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
    Route::put('/cart/{cart}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/{cart}', [CartController::class, 'destroy'])->name('cart.destroy');
});

// wishlist
Route::middleware(['auth'])->group(function () {
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
    Route::post('/wishlist/{product}', [WishlistController::class, 'toggle'])->name('wishlist.toggle');
});

// deals
Route::get('/deals', [DealController::class, 'index'])->name('deals.index');

// reviews
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store')->middleware('auth');
Route::get('/reviews/average/{productId}', [ReviewController::class, 'averageReview'])->name('reviews.average');

// profile
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
});
