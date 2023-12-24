<?php

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

use App\Http\Controllers\MenuController;

Route::view('/', 'homepage')->name('homepage');
Route::view('/about-us', 'about-us')->name('about-us');
Route::view('/partnership', 'partnership')->name('partnership');
Route::view('/contact-us', 'contact-us')->name('contact-us');

Route::get('/auth', [\App\Http\Controllers\AuthController::class, 'index'])
    ->middleware('guest')
    ->name('auth.index');

Route::post('/auth/register', [\App\Http\Controllers\AuthController::class, 'register'])
    ->middleware('guest')
    ->name('auth.register');

Route::post('/auth/login', [\App\Http\Controllers\AuthController::class, 'login'])
    ->middleware('guest')
    ->name('auth.login');

Route::post('/auth/logout', [\App\Http\Controllers\AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('auth.logout');

Route::get('/checkout', [\App\Http\Controllers\CheckoutController::class, 'show'])
    ->middleware('auth')
    ->name('checkout');

Route::post('/checkout', [\App\Http\Controllers\CheckoutController::class, 'submit'])
    ->middleware('auth')
    ->name('checkout.submit');

Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
Route::get('/category/{category}', [MenuController::class, 'show'])->name('menu.show');
Route::get('/menu/{menu}', [MenuController::class, 'detail'])->name('menu.detail');