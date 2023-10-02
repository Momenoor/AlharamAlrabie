<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/menu',[App\Http\Controllers\HomeController::class, 'menu'])->name('menu');



Auth::routes();

Route::middleware('auth')->group(function () {
    Route::resource('product', App\Http\Controllers\ProductController::class);
    Route::resource('category', App\Http\Controllers\CategoryController::class);
    Route::resource('account', App\Http\Controllers\AccountController::class);
    Route::resource('transaction', App\Http\Controllers\TransactionController::class);
});
