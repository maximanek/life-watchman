<?php

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

use Illuminate\Support\Facades\Route;
use Modules\Finance\Http\Controllers\FinanceController;

Route::prefix('finance')->name('finance.')->group(function() {


    Route::get('/', [FinanceController::class, 'index'])->name('index');
    Route::get('/create', [FinanceController::class, 'create'])->name('create');
    Route::post('/create', [FinanceController::class, 'store']);
    Route::prefix('/{id}')->group(function() {
        Route::get('/edit', [FinanceController::class, 'edit'])->name('edit');
        Route::post('/edit', [FinanceController::class, 'update']);
        Route::delete('/delete', [FinanceController::class, 'delete']);
    });



});
