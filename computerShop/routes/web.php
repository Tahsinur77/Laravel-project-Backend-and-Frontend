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



//Customers
Route::get('/customer/registration',[CustomerController::class,'registration'])->name('customer.registration');
Route::post('customer/registration/submit',[CustomerController::class,'registrationSubmit'])->name('customer.registration.submit');
Route::get('/customer/list',[CustomerController::class,'customerList'])->name('customer.list');

//Products
Route::get('/products',[ProductController::class,'addProducts'])->name('addproducts');
Route::post('/products/details',[ProductController::class,'products'])->name('products');

//Empolyee
Route::get('/employee/registration',[EmployeeController::class,'registration'])->name('employee.registration');
Route::post('/employee/registration/submit',[EmployeeController::class,'registrationSubmit'])->name('employee.registration.submit');
Route::get('/employee/list',[EmployeeController::class,'employeeList'])->name('employee.list');