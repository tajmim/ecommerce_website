<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/users/login', function () {
    return view('frontend.login');
})->name('users.login');
Route::get('/users/registration', function () {
    return view('frontend.registration');
})->name('users.registration');
Route::get('/product/{product_slug}', function () {
    return view('frontend.product_details');
})->name('product_details');
Route::get('/category/{category_slug}', function () {
    return view('frontend.category');
})->name('category');
Route::get('/cart', function () {
    return view('frontend.cart');
})->name('cart');
Route::get('/checkout', function () {
    return view('frontend.checkout');
})->name('checkout');
Route::get('/delivery_info', function () {
    return view('frontend.delivery_info');
})->name('delivery_info');
Route::get('/payment', function () {
    return view('frontend.payment');
})->name('payment');
Route::get('/confirm_order', function () {
    return view('frontend.confirm_order');
})->name('confirm_order');
Route::get('/dashboard', function () {
    return view('frontend.dashboard');
})->name('frontend.dashboard');
Route::get('/purchase_history', function () {
    return view('frontend.purchase_history');
})->name('purchase_history');
Route::get('/digital-purchase-history', function () {
    return view('frontend.digital-purchase-history');
})->name('digital-purchase-history');
Route::get('/sent-refund-request', function () {
    return view('frontend.sent-refund-request');
})->name('sent-refund-request');
Route::get('/wishlists', function () {
    return view('frontend.wishlists');
})->name('wishlists');



Route::get('/users/registration', [UserController::class, 'showRegistrationForm'])->name('users.registration');
Route::get('/get-thana/{id}', [UserController::class, 'getThana'])->name('get.thana');
Route::post('/users/regiter/store', [UserController::class, 'Registration'])->name('users.registration.store');
Route::post('/users/login/store', [UserController::class, 'Login'])->name('users.login.store');
