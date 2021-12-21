<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
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
Route::get('/books', [FrontendController::class, 'shop'])->name('books');
Route::get('/book/details', [FrontendController::class, 'productDetails'])->name('book_details');

// admin
Route::middleware(['admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
        Route::prefix('products')->group(function () {
            Route::prefix('category')->group(function () {
                Route::get('/add', [CategoryController::class, 'addCategory'])->name('category.add');
                Route::post('/store', [CategoryController::class, 'storeCategory'])->name('category.store');
                Route::get('/edit/{category:slug}', [CategoryController::class, 'editCategory'])->name('category.edit');
                Route::post('/update/{id}', [CategoryController::class, 'updateCategory'])->name('category.update');
                Route::get('/delete/{id}', [CategoryController::class, 'deleteCategory'])->name('category.delete');
            });
            Route::prefix('subcategory')->group(function () {
                Route::get('/add', [CategoryController::class, 'addSubCategory'])->name('subcategory.add');
                Route::post('/store', [CategoryController::class, 'storeSubCategory'])->name('subcategory.store');
                Route::get('/edit/{subcategory:slug}', [CategoryController::class, 'editSubCategory'])->name('subcategory.edit');
                Route::post('/update/{id}', [CategoryController::class, 'updateSubCategory'])->name('subcategory.update');
                Route::get('/delete/{id}', [CategoryController::class, 'deleteSubCategory'])->name('subcategory.delete');
            });
            Route::prefix('tags')->group(function () {
                Route::get('/add', [TagController::class, 'addTag'])->name('tag.add');
                Route::post('/store', [TagController::class, 'storeTag'])->name('tag.store');
                Route::get('/edit/{tag:slug}', [TagController::class, 'editTag'])->name('tag.edit');
                Route::post('/update/{id}', [TagController::class, 'updateTag'])->name('tag.update');
                Route::get('/delete/{id}', [TagController::class, 'deleteTag'])->name('tag.delete');
            });
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
