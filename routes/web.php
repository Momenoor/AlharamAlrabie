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

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/sales/import', [App\Http\Controllers\IncomeController::class, 'importForm'])->name('sales.import.form');
    Route::post('/sales/import', [App\Http\Controllers\IncomeController::class, 'import'])->name('sales.import');
    Route::resource('sales', App\Http\Controllers\IncomeController::class);

    Route::get('/product/import', [App\Http\Controllers\ProductController::class, 'importForm'])->name('product.import.form');
    Route::post('/product/import', [App\Http\Controllers\ProductController::class, 'import'])->name('product.import');
    Route::resource('product', App\Http\Controllers\ProductController::class);

    Route::get('/chart/import', [App\Http\Controllers\ChartController::class, 'importForm'])->name('chart.import.form');
    Route::post('/chart/import', [App\Http\Controllers\ChartController::class, 'import'])->name('chart.import');
    Route::resource('chart', App\Http\Controllers\ChartController::class);
});
