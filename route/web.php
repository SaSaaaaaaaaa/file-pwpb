<?php

use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ShopDetailsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomepageController::class, 'view']);
Route::get('/shop', [ShopController::class, 'view']);
Route::get('/category', [KategoriController::class, 'view']);
Route::get('/blog-details', [BlogDetailsController::class, 'view']);
Route::get('/contact-us', [ContactController::class, 'view']);
Route::get('/shop-details', [ShopDetailsController::class, 'view']);
Route::get('/about', [AboutController::class, 'view']);
Route::get('/login', [LoginController::class,'view']);
Route::get('/cart', [CartController::class, 'view']);