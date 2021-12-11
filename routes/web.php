<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [HomeController::class, 'index'])->name('home1');
Route::get('/cart', [FrontendController::class, 'cart'])->name('cart');
Route::get('/checkout', [FrontendController::class, 'checkout'])->name('checkout');
Route::get('/books', [FrontendController::class, 'shop'])->name('books');
Route::get('/book/details', [FrontendController::class, 'productDetails'])->name('book_details');

// admin
Route::middleware(['admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    });
});
Route::get('/admin/senSorUser', [AdminController::class, 'showAdminLoginForm'])->name('show.admin.login'); 
Route::post('/admin/senSorUser', [AdminController::class, 'postAdminLogin'])->name('admin.login.post'); 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
