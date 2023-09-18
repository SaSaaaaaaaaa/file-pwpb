<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\ShopDetailsController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('homepage');
Route::get('/shop', [ShopController::class, 'view'])->name('shop');
Route::get('/category', [KategoriController::class, 'view'])->name('category');
Route::get('/blog-details', [BlogDetailsController::class, 'view'])->name('blog-details');
Route::get('/contact-us', [ContactController::class, 'view'])->name('contact');
Route::get('/shop-details', [ShopDetailsController::class, 'view'])->name('shop-details');
Route::get('/about', [AboutController::class, 'view'])->name('about-us');
Route::get('/login', [LoginController::class,'view'])->name('login');
Route::get('/cart', [CartController::class, 'view'])->name('cart');
Route::get('/blogs', [BlogsController::class, 'view'])->name('blogs');
Route::get('/register', [RegisterController::class, 'view'])->name('register');
Route::get('/forgot-password', [ForgotPasswordController::class, 'view'])->name('forgot-password');
Route::get('/profile', [ProfileController::class, 'view'])->name('profile');
Route::get('/faq', [HomeController::class, 'view'])->name('faq');
Route::get('/check-out', [CartController::class, 'viewco'])->name('check-out');
Route::get('/wishlist', [CartController::class, 'viewwi'])->name('wishlist');