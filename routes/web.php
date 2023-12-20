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

Route::view('/', 'homepage');
Route::view('/about-us', 'about-us');
Route::view('/partnership', 'partnership');
Route::view('/contact-us', 'contact-us');

// Route::get('/menu', function () {

//     $data = [
//         'content' => 'home/menu/index'
//     ];
//     return view('home.layouts.wrapper',$data );
// });

Route::get('/menu', [TypeController::class,'index']);
Route::get('/menu/{menu}', [TypeMenuController::class,'show'])->name('menu.show');



