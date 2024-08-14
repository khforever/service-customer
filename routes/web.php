<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});



Route::get('customers',[CustomerController::class,'index'])->name('customers');



Route::get('addCustomer',[CustomerController::class,'create'])->name('addCustomer');



Route::post('storeCustomer',[CustomerController::class,'store'])->name('storeCustomer') ;
Route::get('showCustomer/{id}',[CustomerController::class,'show']);



Route::get('updateCustomer/{id}',[CustomerController::class,'edit']);

Route::post('update/{id}',[CustomerController::class,'update'])->name('update');



Route::get('deleteCustomer/{id}',[CustomerController::class,'destroy']);

















    Route::get('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
