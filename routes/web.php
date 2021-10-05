<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\UserControler;
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

Route::get('/', function () {
    return view('home');
});

Route::get("login",[UserControler::class,'openLogin']);

Route::get("products",[UserControler::class,'openProducts']);

Route::get("cart",[UserControler::class,'openCart']);

Route::get("eachproduct",[UserControler::class,'openeachproduct']);

Route::post("loginUserDetails",[UserControler::class,'getData']);