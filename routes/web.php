<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;

// Main Page Route
Route::get('/dashboard', [Analytics::class, 'index'])->name('dashboard-analytics');

Route::get('/', function () {
    return view('frontend.home');
});

Route::resource('productcategories', ProductCategoryController::class);

Route::resource('product', ProductController::class);