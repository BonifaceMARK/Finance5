<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StandardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PaymentController;





Route::get('/cac', [CommunicationController::class, 'index'])->name('cac.index');
Route::post('/projects/create', [CommunicationController::class, 'store'])->name('projects.store');
Route::delete('/tasks/{taskId}/{projectId}', [CommunicationController::class, 'taskdestroy'])->name('tasks.destroy');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/signout', [LoginController::class, 'signout'])->name('signout');

Route::get('/transactions/{id}/cancel', [PaymentController::class, 'showCancelForm'])->name('transactions.cancel-form');
Route::put('/transactions/{id}/cancel', [PaymentController::class, 'processCancellation'])->name('transactions.process-cancellation');

Route::get('/standard', [StandardController::class, 'standardDash'])->name('accounting');

Route::get('/transactions-report', [PaymentController::class, 'index'])->name('transactions-report.index');

Route::post('/transactions-report', [PaymentController::class, 'store'])->name('transactions-report.store');
Route::get('/transactions-report/{id}', [PaymentController::class, 'showReport'])->name('transactions-reports.show');

Route::get('/payment', [ApiController::class, 'payment']);

Route::get('/transactions', [TokenController::class, 'index'])->name('transactions.index');
Route::get('/transactions/create', [TokenController::class, 'create'])->name('transactions.create');
Route::post('/transactions', [TokenController::class, 'store'])->name('transactions.store');
Route::get('/transactions/{id}', [TokenController::class, 'show'])->name('transactions.show');
