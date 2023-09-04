<?php

use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ShopController;
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

Route::get('/', [HomepageController::class, 'index']);
Route::get('/shop', [ShopController::class, 'view']);
Route::get('/category', [KategoriController::class, 'view']);
Route::get('/blog-details', [BlogDetailsController::class, 'view']);
Route::get('/contact-us', [ContactController::class, 'view']);

