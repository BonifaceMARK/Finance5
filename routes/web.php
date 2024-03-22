<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionsReportController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/signout', [LoginController::class, 'signout'])->name('signout');

Route::get('/transactions-report', [TransactionsReportController::class, 'indexReport'])->name('transactions-report.index');
Route::get('/transactions-report/create', [TransactionsReportController::class, 'createReportReport'])->name('transactions-report.create');
Route::post('/transactions-report', [TransactionsReportController::class, 'storeReport'])->name('transactions-report.store');
Route::get('/transactions-report/{id}', [TransactionsReportController::class, 'showReport'])->name('transactions-report.show');


Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');
Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');
Route::get('/transactions/{id}', [TransactionController::class, 'show'])->name('transactions.show');
