<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

// صفحه اصلی
Route::get('/', [HomeController::class, 'index'])->name('home');

// صفحه دسته‌بندی با اسلاگ (سئو)
Route::get('/category/{slug}', [CategoryController::class, 'show'])->name('category.show');

// صفحه جزئیات محصول با اسلاگ (سئو)
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');

// صفحات ثابت
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'contactSubmit'])->name('contact.submit');
Route::get('/about', [PageController::class, 'about'])->name('about');

// احراز هویت مشتری
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::post('/login', [PageController::class, 'loginSubmit'])->name('login.submit');
Route::get('/register', [PageController::class, 'register'])->name('register');
Route::post('/register', [PageController::class, 'registerSubmit'])->name('register.submit');
Route::get('/logout', function () {
    session()->forget(['user_id', 'user_name']);
    return redirect('/')->with('success', 'با موفقیت خارج شدید.');
})->name('logout');

// پروفایل
Route::get('/profile', [PageController::class, 'profile'])->name('profile');
Route::post('/profile/update', [PageController::class, 'profileUpdate'])->name('profile.update');

// ==================== پنل ادمین ====================
Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminController::class, 'loginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.submit');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // محصولات
    Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
    Route::get('/products/create', [AdminController::class, 'createProduct'])->name('admin.products.create');
    Route::post('/products', [AdminController::class, 'storeProduct'])->name('admin.products.store');
    Route::get('/products/{id}/edit', [AdminController::class, 'editProduct'])->name('admin.products.edit');
    Route::post('/products/{id}', [AdminController::class, 'updateProduct'])->name('admin.products.update');
    Route::get('/products/{id}/delete', [AdminController::class, 'deleteProduct'])->name('admin.products.delete');

    // دسته‌بندی‌ها
    Route::get('/categories', [AdminController::class, 'categories'])->name('admin.categories');
    Route::post('/categories', [AdminController::class, 'storeCategory'])->name('admin.categories.store');
    Route::get('/categories/{id}/edit', [AdminController::class, 'editCategory'])->name('admin.categories.edit');
    Route::post('/categories/{id}', [AdminController::class, 'updateCategory'])->name('admin.categories.update');
    Route::get('/categories/{id}/delete', [AdminController::class, 'deleteCategory'])->name('admin.categories.delete');

    // سفارش‌ها
    Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::get('/orders/{id}', [AdminController::class, 'orderDetails'])->name('admin.orders.details');
    Route::post('/orders/{id}/status', [AdminController::class, 'updateOrderStatus'])->name('admin.orders.status');

    // مشتریان
    Route::get('/customers', [AdminController::class, 'customers'])->name('admin.customers');
});