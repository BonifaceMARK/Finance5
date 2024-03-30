<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommunicationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StandardController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PFRSChecklistController;








Route::get('/cac', [CommunicationController::class, 'index'])->name('cac.index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register',[AuthController::class,'loadRegister']);
Route::post('/register',[AuthController::class,'register'])->name('register');
Route::get('/loginload',[AuthController::class,'loadLogin'])->name('loadlogin');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::get('/transactions/{id}/cancel', [PaymentController::class, 'showCancelForm'])->name('transactions.cancel-form');
Route::put('/transactions/{id}/cancel', [PaymentController::class, 'processCancellation'])->name('transactions.process-cancellation');

Route::get('/standard', [StandardController::class, 'standardDash'])->name('accounting');



Route::post('/transactions-report', [PaymentController::class, 'store'])->name('transactions-report.store');
Route::get('/transactions/{id}/payment', [PaymentController::class, 'showPayment'])->name('transactions.showPayment');

Route::get('/payment', [ApiController::class, 'payment']);

Route::get('/transactions/{id?}', [PaymentController::class, 'index'])->name('transactions.index');

Route::get('/transactions/create', [TokenController::class, 'create'])->name('transactions.create');
Route::post('/transactions', [TokenController::class, 'store'])->name('transactions.store');
Route::get('/transactions/{id}', [TokenController::class, 'show'])->name('transactions.show');
Route::get('/pfrs/checklist', [PFRSChecklistController::class, 'index'])->name('pfrs.checklist.index');
Route::post('/pfrs/checklist/submit', [PFRSChecklistController::class, 'submit'])->name('checklist.submit');


Route::post('/chat/store', [CommunicationController::class, 'storeMessage'])->name('chat.store');
Route::get('/chat/fetch', [CommunicationController::class, 'fetch'])->name('chat.fetch');
Route::get('/communication', [ApiController::class, 'fetchMessage']);
