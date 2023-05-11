<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customercontroller;
use App\Http\Controllers\savingscontroller;
use App\Http\Controllers\loanscontroller;
use App\Http\Controllers\assetscontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('customers', customercontroller::class);
Route::resource('savings', savingscontroller::class);
Route::resource('loans', loanscontroller::class);
Route::resource('assets', assetscontroller::class);
