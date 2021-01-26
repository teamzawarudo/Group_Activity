<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;

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

// Route::get('/index', function () {
//     return view('index');
// });
//laravel controller
Route::get('/index', [Homecontroller::class,'index']);

Route::get('/generic', [Homecontroller::class,'generic']);

Route::get('/elements', [Homecontroller::class,'elements']);

//laravel request
Route::get('/regformindex', [Homecontroller::class,'regformindex']);

Route::post('/display', [Homecontroller::class,'display']);