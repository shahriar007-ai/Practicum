<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ShippingController;
use App\Http\Controllers\PaymentMethodController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// frontend

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
Route::get('/books/{category_id}/{category_slug}', [FrontendController::class, 'books'])->name('books');
Route::get('/book/details/{book:slug}', [FrontendController::class, 'bookDetails'])->name('book.details');

// admin
Route::middleware(['admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::prefix('books')->group(function () {
            Route::get('/list', [BookController::class, 'index'])->name('book.list');
            Route::get('/add', [BookController::class, 'addBook'])->name('book.add');
            Route::post('/store', [BookController::class, 'storeBook'])->name('book.store');
            Route::get('/edit/{id}', [BookController::class, 'editBook'])->name('book.edit');
            Route::post('/update/{id}', [BookController::class, 'updateBook'])->name('book.update');
            Route::get('/delete/{id}', [BookController::class, 'deleteBook'])->name('book.delete');

            Route::prefix('category')->group(function () {
                Route::get('/list', [CategoryController::class, 'index'])->name('category.list');
                Route::get('/add', [CategoryController::class, 'addCategory'])->name('category.add');
                Route::post('/store', [CategoryController::class, 'storeCategory'])->name('category.store');
                Route::get('/edit/{category:slug}', [CategoryController::class, 'editCategory'])->name('category.edit');
                Route::post('/update/{id}', [CategoryController::class, 'updateCategory'])->name('category.update');
                Route::get('/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');
            });
            Route::prefix('subcategory')->group(function () {
                Route::get('/list', [CategoryController::class, 'subCatList'])->name('subcategory.list');
                Route::get('/add', [CategoryController::class, 'addSubCategory'])->name('subcategory.add');
                Route::post('/store', [CategoryController::class, 'storeSubCategory'])->name('subcategory.store');
                Route::get('/edit/{subcategory:slug}', [CategoryController::class, 'editSubCategory'])->name('subcategory.edit');
                Route::post('/update/{id}', [CategoryController::class, 'updateSubCategory'])->name('subcategory.update');
                Route::get('/delete/{id}', [CategoryController::class, 'deleteSubCategory'])->name('subcategory.delete');
            });
            Route::prefix('tags')->group(function () {
                Route::get('/list', [TagController::class, 'index'])->name('tag.list');
                Route::get('/add', [TagController::class, 'addTag'])->name('tag.add');
                Route::post('/store', [TagController::class, 'storeTag'])->name('tag.store');
                Route::get('/edit/{tag:slug}', [TagController::class, 'editTag'])->name('tag.edit');
                Route::post('/update/{id}', [TagController::class, 'updateTag'])->name('tag.update');
                Route::get('/delete/{id}', [TagController::class, 'deleteTag'])->name('tag.delete');
            });
        });
        Route::prefix('coupons')->group(function () {
            Route::get('/list', [CouponController::class, 'index'])->name('coupon.list');
            Route::get('/add', [CouponController::class, 'addCoupon'])->name('coupon.add');
            Route::post('/store', [CouponController::class, 'storeCoupon'])->name('coupon.store');
            Route::get('/edit/{coupon:slug}', [CouponController::class, 'editCoupon'])->name('coupon.edit');
            Route::post('/update/{id}', [CouponController::class, 'updateCoupon'])->name('coupon.update');
            Route::get('/delete/{id}', [CouponController::class, 'deleteCoupon'])->name('coupon.delete');
        }); 
        Route::prefix('shipping')->group(function () {
            Route::get('/list', [ShippingController::class, 'index'])->name('shipping.list');
            Route::get('/add', [ShippingController::class, 'addShipping'])->name('shipping.add');
            Route::post('/store', [ShippingController::class, 'storeShipping'])->name('shipping.store');
            Route::get('/edit/{coupon:slug}', [ShippingController::class, 'editShipping'])->name('shipping.edit');
            Route::post('/update/{id}', [ShippingController::class, 'updateShipping'])->name('shipping.update');
            Route::get('/delete/{id}', [ShippingController::class, 'deleteShipping'])->name('shipping.delete');
        });
        Route::prefix('payment')->group(function () {  
			Route::get('/cash-on-delivery', [PaymentMethodController::class,'cashOnDelivery'])->name('cash-on-delivery');
            Route::post('/cash-on-delivery/update', [PaymentMethodController::class,'cashUpdate'])->name('cash.update');
            Route::get('/ssl-commerz', [PaymentMethodController::class,'sslCommerz'])->name('ssl-commerz');
            Route::post('/ssl-commerz/update', [PaymentMethodController::class,'sslUpdate'])->name('ssl.update');
        }); 
    });
});
Route::get('/admin/senSorUser', [AdminController::class, 'showAdminLoginForm'])->name('show.admin.login'); 
Route::post('/admin/senSorUser', [AdminController::class, 'postAdminLogin'])->name('admin.login.post'); 

Auth::routes();
//user
Route::middleware(['auth','user'])->group(function () {
    Route::prefix('user')->group(function () {
        Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    });
});
