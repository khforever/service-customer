<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::get('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/refresh', [AuthController::class, 'refresh']);
Route::get('/user-profile', [AuthController::class, 'userProfile']);











Route::get('customers',[CustomerController::class,'index']);


Route::resource('customer', CustomerController::class);

Route::get('customer/{customerId}/phone', [CustomerController::class, 'storePhone']);

Route::get('customer/{customerId}/address', [CustomerController::class, 'storeAddress']);

Route::get('customer/{customerId}/group', [CustomerController::class, 'storeGroup']);

























// Route::get('addCustomer',[CustomerController::class,'create'])->name('addCustomer');



// Route::get('storeCustomer',[CustomerController::class,'store'])->name('storeCustomer') ;



// Route::get('showCustomer/{id}',[CustomerController::class,'show']);



// Route::get('updateCustomer/{id}',[CustomerController::class,'edit']);

// Route::put('update/{id}',[CustomerController::class,'update']);



// Route::get('deleteCustomer/{id}',[CustomerController::class,'destroy']);



