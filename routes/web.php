<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ThankController;
use App\Http\Controllers\ThankyouController;
use App\Http\Controllers\ConfirmationController;
use App\Http\Controllers\AboutController;

use App\Http\Controllers\ContactController;
use App\views\cart;
use App\Http\Controllers\AppController;

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

Route::get('/',[AppController::class,'index'])->name('app.index');
Route::get('/test-view',[AppController::class,'test_view']);
Route::get('/shop',[ShopController::class,'index'])->name('shop.index');
Route::get('/product/{slug}', [ProductController::class, 'show'])->name('product.show');
Route::get('/product/{slug}', [ShopController::class, 'productDetails'])->name('shop.product.details');

Route::get('/cart-wishlist-count',[ShopController::class,'getCartAndWishlistCount'])->name('shop.cart.wishlist.count');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');

Route::get('/contact/{id}', [ContactController::class, 'show'])->name('contact.show');

Route::get('/thank', function () {
    return view('thank');
})->name('thank.index');



Route::get('/wishlist', [WishlistController::class, 'getWishlistedProducts'])->name('wishlist.list');
Route::post('/wishlist/add', [WishlistController::class, 'addProductToWishlist'])->name('wishlist.store');
Route::delete('/wishlist/remove',[WishlistController::class,'removeProductFromWishlist'])->name('wishlist.remove');
Route::delete('/wishlist/clear',[WishlistController::class,'clearWishlist'])->name('wishlist.clear');
Route::post('/wishlist/move-to-cart',[WishlistController::class,'moveToCart'])->name('wishlist.move.to.cart');


Route::get('/cart',[CartController::class,'index'])->name('cart.index');
Route::post('/cart/store', [CartController::class, 'addToCart'])->name('cart.store');
Route::put('/cart/update', [CartController::class, 'updateCart'])->name('cart.update');
Route::delete('/cart/remove', [CartController::class, 'removeItem'])->name('cart.remove');
Route::delete('/cart/clear', [CartController::class, 'clearCart'])->name('cart.clear');

Route::get('/checkout', [CheckoutController::class, 'show'])->name('checkout.show');
Route::post('/checkout/place-order', [CheckoutController::class, 'placeOrder'])->name('checkout.placeOrder');
Route::get('/checkout/create', [CheckoutController::class, 'create'])->name('checkout.create');
Route::post('/checkout/store', [CheckoutController::class, 'store'])->name('checkout.store');

Route::get('/thank-you',[ThankController::class, 'index'])->name('thank.index');
Route::get('/thankyou', [ThankyouController::class, 'show'])->name('checkout.placeOrder');

Route::get('/confirmation', [ConfirmationController::class, 'show'])->name('confirmation.show');

Route::get('/about', [AboutController::class, 'show'])->name('about.index');

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/my-account',[UserController::class,'index'])->name('user.index');
});

Route::middleware(['auth','auth.admin'])->group(function(){
    Route::get('/admin',[AdminController::class,'index'])->name('admin.index');
});
