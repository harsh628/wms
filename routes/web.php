<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
