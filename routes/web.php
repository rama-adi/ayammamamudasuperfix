<?php

use App\Http\Controllers\TypeController;
use App\Http\Controllers\TypeMenuController;
use Illuminate\Support\Facades\Route;
use Illuminate\Resources\Home\layouts;
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

Route::view('/', 'homepage')->name('homepage');
Route::view('/about-us', 'about-us')->name('about-us');
Route::view('/partnership', 'partnership')->name('partnership');
Route::view('/contact-us', 'contact-us')->name('contact-us');

// Route::get('/menu', function () {

//     $data = [
//         'content' => 'home/menu/index'
//     ];
//     return view('home.layouts.wrapper',$data );
// });

Route::view('/menu', 'menu.index')->name('menu.index');
Route::get('/menu/{menu}', [TypeMenuController::class,'show'])->name('menu.show');



