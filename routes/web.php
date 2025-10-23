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
use App\Models\Product;
use App\Models\ProductCategory;

// Main Page Route


Route::get('/', function () {
    return view('frontend.home.homepage');
});
Route::get('/about', function () {
    return view('frontend.pages.about.about');
});
Route::get('/blog', [BlogController::class, 'frontendIndex'])->name('blog.index');
Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');

// Route::get('/blog', function () {
//     return view('frontend.pages.blog.blog');
// });
Route::get('/contact', function () {
    return view('frontend.pages.contact.contact');
});

// 3D Printer page - get products by category relationship
Route::get('/products/3d-printer', function () {
    $category = ProductCategory::where('slug', '3d-printer')->firstOrFail();
    $products = $category->products;
    return view('frontend.pages.products.3d-printer', compact('products', 'category'));
})->name('products.3d-printer');

// 3D Printing Resin page - get products by category relationship
Route::get('/products/3d-printing-resin', function () {
    $category = ProductCategory::where('slug', '3d-printing-resin')->firstOrFail();
    $products = $category->products;
    return view('frontend.pages.products.3d-printing-resin', compact('products', 'category'));
})->name('products.3d-printing-resin');

// Other product category pages - ADD MISSING ROUTE NAMES
Route::get('/products/3d-printer-software', function () {
    return view('frontend.pages.products.3d-printer-software');
})->name('products.3d-printer-software'); // ADD THIS NAME

Route::get('/products/3d-printing-service', function () {
    return view('frontend.pages.products.3d-printing-service');
})->name('products.3d-printing-service'); // ADD THIS NAME

// ================ SINGLE PRODUCT ROUTE ================
Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');


Route::get('/applications/automotive', function () {
    return view('frontend.pages.applications.automotive');
});
Route::get('/applications/aerospace', function () {
    return view('frontend.pages.applications.aerospace');
});
Route::get('/applications/dental-industry', function () {
    return view('frontend.pages.applications.dental-industry');
});
Route::get('/applications/jewelry-industry', function () {
    return view('frontend.pages.applications.jewelry-industry');
});
Route::get('/applications/industrial-engineering', function () {
    return view('frontend.pages.applications.industrial-engineering');
});
Route::get('/applications/3d-printing-consumables', function () {
    return view('frontend.pages.applications.3d-printing-consumables');
});
Route::get('/applications/additive-manufacturing', function () {
    return view('frontend.pages.applications.additive-manufacturing');
});
Route::get('/applications/educational-applications', function () {
    return view('frontend.pages.applications.educational-applications');
});
// Authentication Routes
Route::get('/signin', [LoginBasic::class, 'index'])->name('login');
Route::post('/signin', [LoginBasic::class, 'login'])->name('login.submit');
Route::get('/signup', [RegisterBasic::class, 'index'])->name('register');
Route::post('/signup', [RegisterBasic::class, 'register'])->name('register.submit');
Route::post('/logout', [LoginBasic::class, 'logout'])->name('logout');
Route::get('/check-token', [LoginBasic::class, 'checkToken'])->name('check.token');

Route::middleware('auth:sanctum')->get('/check-token', [LoginBasic::class, 'checkToken']);
    
Route::get('/terms-and-condition', function () {
    return view('frontend.pages.terms-and-condition');
});
Route::get('/privacy-policy', function () {
    return view('frontend.pages.privacy-policy');
}); 
Route::get('/cookie-policy', function () {
    return view('frontend.pages.cookie-policy');
}); 

Route::middleware([CheckTokenExpiration::class, CheckAdmin::class])->group(function () {
    Route::get('/dashboard', [Analytics::class, 'index'])->name('dashboard-analytics');
    Route::resource('/dashboard/productcategories', ProductCategoryController::class);
    Route::resource('/dashboard/product', ProductController::class);
    Route::resource('/dashboard/blog', BlogController::class);
});
// Route::get('/auth/login-basic', [LoginBasic::class, 'index'])->name('login');
// Route::post('/auth/login-basic', [LoginBasic::class, 'login'])->name('login.submit');
// Route::get('/auth/register-basic', [RegisterBasic::class, 'index'])->name('register');
// Route::post('/auth/register-basic', [RegisterBasic::class, 'register'])->name('register.submit');
Route::post('/logout', [LoginBasic::class, 'logout'])->name('logout');
Route::get('/auth/forgot-password-basic', [ForgotPasswordBasic::class, 'index'])->name('auth-reset-password-basic');