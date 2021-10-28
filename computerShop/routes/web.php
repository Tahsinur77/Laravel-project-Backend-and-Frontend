<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
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


//Deafult
Route::get('/', function () {
    return view('pages.customers.reg');
});


//Login
Route::get('/login',[LoginController::class,'login'])->name('login');


//Customer Registration
Route::get('/registration',[CustomerController::class,'registration'])->name('customer.registration');
Route::post('/registration',[CustomerController::class,'registrationSubmit'])->name('customer.registration');
Route::get('/customer/list',[CustomerController::class,'customerList'])->name('customer.list');

//Products
Route::get('/products',[ProductController::class,'addProducts'])->name('addproducts');

//Empolyee
Route::get('/emp/registration',[EmployeeController::class,'registration'])->name('employee.registration');
Route::post('/emp/registration',[EmployeeController::class,'registrationSubmit'])->name('employee.registration');
