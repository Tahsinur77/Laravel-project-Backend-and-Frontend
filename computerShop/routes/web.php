<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
<<<<<<< HEAD
use App\Http\Controllers\ProductController;
=======
use App\Http\Controllers\CustomerController;
>>>>>>> eb171f8cf0c0ac032fb4bcdeac932baaafe13eb7
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
    return view('pages.reg');
});
Route::get('/login',[LoginController::class,'login'])->name('login');
<<<<<<< HEAD

Route::get('/products',[ProductController::class,'addProducts'])->name('addproducts');
=======
//Registration
Route::get('/registration',[CustomerController::class,'registration'])->name('customer.registration');
Route::post('/registration',[CustomerController::class,'registrationSubmit'])->name('customer.registration');
Route::get('/customer/list',[CustomerController::class,'customerList'])->name('customer.list');
>>>>>>> eb171f8cf0c0ac032fb4bcdeac932baaafe13eb7
