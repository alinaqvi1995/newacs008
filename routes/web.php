<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\BrandController;
use App\Http\Controllers\Dashboard\UnitController;
use App\Http\Controllers\Dashboard\TagController;
use App\Http\Controllers\CartController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/user-account', [FrontendController::class, 'userAccount'])->name('user.account');
Route::get('/my-cart', [FrontendController::class, 'my_cart'])->name('my.cart');

Route::get('/products', [FrontendController::class, 'products'])->name('frontend.products');
Route::get('/products/detail/{slug}', [FrontendController::class, 'productsdetail'])->name('frontend.products.detail');
Route::get('/wishlist', [FrontendController::class, 'wishlist'])->name('frontend.wishlist');

Route::get('/orders', [DashboardController::class, 'orders'])->name('orders');
Route::get('/add-product', [DashboardController::class, 'addProduct'])->name('addProduct');

// cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/add', [CartController::class, 'addToCart'])->middleware('auth')->name('cart.add');
Route::put('/cart/update/{id}', [CartController::class, 'updateCart'])->name('cart.update');
Route::delete('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('categories', CategoryController::class);
    Route::resource('brands', BrandController::class);
    Route::resource('units', UnitController::class);
    Route::resource('tags', TagController::class);
    Route::resource('products', ProductController::class);
});
