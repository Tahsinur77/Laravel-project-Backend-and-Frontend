<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\welcomeController;
use App\Http\Controllers\OrderController;
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
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[welcomeController::class,'welcome'])->middleware('NavBarFindings')->name('welcome');
Route::get('/about', [welcomeController::class,'about'])->name('about');
Route::get('/contact', [welcomeController::class,'contact'])->name('contact');


//Login
Route::get('/login',[LoginController::class,'login'])->name('login');



//Customers
Route::get('/customer/registration',[CustomerController::class,'registration'])->name('customer.registration');
Route::post('customer/registration/submit',[CustomerController::class,'registrationSubmit'])->name('customer.registration.submit');
Route::get('/customer/list',[CustomerController::class,'customerList'])->name('customer.list');
Route::get('/customer/edit/{id}/{cName}',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/edit',[CustomerController::class,'editSubmit'])->name('customer.edit.submit');
Route::get('/customer/delete/{id}/{cName}',[CustomerController::class,'deleteCustomer']);

//Products
Route::get('/addproducts',[ProductController::class,'addProducts'])->middleware('NavBarFindings')->name('addproducts');
Route::post('/products/list',[ProductController::class,'products'])->name('products');
Route::get('/products/list/{category}',[ProductController::class,'productListByCategory'])->name('products.category.item');
Route::get('/products/list/{category}/{type}',[ProductController::class,'productListByType'])->name('products.category.item');
Route::get('/productDetails/{id}',[ProductController::class,'productDetails'])->name('productDetails');

//Empolyee
Route::get('/employee/registration',[EmployeeController::class,'registration'])->name('employee.registration');
Route::post('/employee/registration/submit',[EmployeeController::class,'registrationSubmit'])->name('employee.registration.submit');
Route::get('/employee/list',[EmployeeController::class,'employeeList'])->name('employee.list');
Route::get('/employee/edit/{id}/{eName}',[EmployeeController::class,'edit'])->name('employee.edit');
Route::post('/employee/edit',[EmployeeController::class,'editSubmit'])->name('employee.edit.submit');
Route::get('/employee/delete/{id}/{eName}',[EmployeeController::class,'deleteEmp']);



//Orders
Route::get('/addtoCart/{id}',[OrderController::class,'addtoCart'])->name('addtocart');