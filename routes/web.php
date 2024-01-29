<?php

use App\Http\Controllers\Payment\TripayController;
use App\Http\Controllers\Transaction\TransactionController;
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

Route::get('/', [TripayController::class, 'getPaymentChannels'])->name('test_tripay');
Route::get('/transaction', [TransactionController::class, 'index'])->name('transaction.index');
Route::post('/transaction/save', [TransactionController::class, 'store'])->name('transaction.store');
Route::get('/transaction/detail/{reference}', [TransactionController::class, 'detail'])->name('transaction.detail');
