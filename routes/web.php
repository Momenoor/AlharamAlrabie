<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sales/import', [App\Http\Controllers\SalesController::class, 'importForm'])->name('sales.import.form');
Route::post('/sales/import', [App\Http\Controllers\SalesController::class, 'import'])->name('sales.import');
Route::resource('sales', App\Http\Controllers\SalesController::class);

