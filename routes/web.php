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

    Route::prefix('income')->name('income.')->group(function () {

        Route::get('/sales/import', [App\Http\Controllers\IncomeController::class, 'importForm'])->name('sales.import.form');
        Route::post('/sales/import', [App\Http\Controllers\IncomeController::class, 'import'])->name('sales.import');
    });
    Route::resource('income', App\Http\Controllers\IncomeController::class);

    Route::prefix('product')->name('product.')->group(function () {

        Route::get('/import', [App\Http\Controllers\ProductController::class, 'importForm'])->name('import.form');
        Route::post('/import', [App\Http\Controllers\ProductController::class, 'import'])->name('import');
    });
    Route::resource('product', App\Http\Controllers\ProductController::class);

    Route::prefix('chart')->name('chart.')->group(function () {

        Route::get('/import', [App\Http\Controllers\ChartController::class, 'importForm'])->name('import.form');
        Route::post('/import', [App\Http\Controllers\ChartController::class, 'import'])->name('import');
    });
    Route::resource('chart', App\Http\Controllers\ChartController::class);
    Route::resource('chartofaccounts', App\Http\Controllers\ChartOfAccountsController::class);

    Route::resource('account', App\Http\Controllers\AccountController::class);
});
