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
Route::post('/projects/create', [CommunicationController::class, 'storeProject'])->name('projects.store');
Route::post('/tasks/create', [CommunicationController::class, 'storeTask'])->name('tasks.store');

// PAYMENT GATEWAY
Route::get('/payments', [PaymentController::class, 'index'])->name('payments.index');
Route::post('/payments', [PaymentController::class, 'storePayment'])->name('payment.store');
Route::delete('/payments/{payment}', [PaymentController::class, 'cancelPayment'])->name('payments.cancel');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/signout', [LoginController::class, 'signout'])->name('signout');


Route::get('/standard', [StandardController::class, 'standardDash'])->name('accounting');


Route::get('/payment', [ApiController::class, 'payment']);



