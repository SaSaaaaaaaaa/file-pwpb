<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\ShopDetailsController;

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

Route::get('/', [HomepageController::class, 'view'])->name('homepage');
Route::get('/shop', [ShopController::class, 'view'])->name('shop');
Route::get('/category', [KategoriController::class, 'view'])->name('category');
Route::get('/blog-details', [BlogDetailsController::class, 'view'])->name('blog-details');
Route::get('/contact-us', [ContactController::class, 'view'])->name('contact');
Route::get('/shop-details', [ShopDetailsController::class, 'view'])->name('shop-details');
Route::get('/about', [AboutController::class, 'view'])->name('about');
Route::get('/login', [LoginController::class,'view'])->name('login');
Route::get('/cart', [CartController::class, 'view'])->name('cart');
Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
