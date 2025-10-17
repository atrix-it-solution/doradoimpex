<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\authentications\ForgotPasswordBasic;
use App\Http\Middleware\CheckAdmin;
use App\Http\Middleware\CheckTokenExpiration;

// Main Page Route


Route::get('/', function () {
    return view('frontend.home.homepage');
});
Route::get('/about', function () {
    return view('frontend.pages.about.about');
});
Route::get('/blog', function () {
    return view('frontend.pages.blog.blog');
});
Route::get('/contact', function () {
    return view('frontend.pages.contact.contact');
});
Route::get('/3d-printer', function () {
    return view('frontend.pages.products.3d-printer');
});
Route::get('/3d-printer', function () {
    return view('frontend.pages.products.3d-printer');
});
Route::get('/3d-printer-software', function () {
    return view('frontend.pages.products.3d-printer-software');
});
Route::get('/3d-printing-resin', function () {
    return view('frontend.pages.products.3d-printing-resin');
});
Route::get('/3d-printing-service', function () {
    return view('frontend.pages.products.3d-printing-service');
});
Route::middleware('auth:sanctum')->get('/check-token', [LoginBasic::class, 'checkToken']);
    
  

Route::middleware([CheckTokenExpiration::class, CheckAdmin::class])->group(function () {
    Route::get('/dashboard', [Analytics::class, 'index'])->name('dashboard-analytics');
    Route::resource('productcategories', ProductCategoryController::class);
    Route::resource('product', ProductController::class);
    Route::resource('blog', BlogController::class);
});
Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('login');
Route::post('/auth/login-basic', [LoginBasic::class, 'login'])->name('login.submit');
Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('register');
Route::post('/auth/register-basic', [RegisterBasic::class, 'register'])->name('register.submit');
Route::post('/logout', [LoginBasic::class, 'logout'])->name('logout');
Route::get('/auth/forgot-password-basic', [ForgotPasswordBasic::class, 'index'])->name('auth-reset-password-basic');