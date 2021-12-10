<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontendController;

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




Route::get('/', [HomeController::class, 'index']);
Route::get('/cart', [FrontendController::class, 'cart']);
Route::get('/checkout', [FrontendController::class, 'checkout']);
Route::get('/shop', [FrontendController::class, 'shop']);
Route::get('/product/details', [FrontendController::class, 'productDetails']);


