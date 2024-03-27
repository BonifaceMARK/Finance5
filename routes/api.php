<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Http;


Route::get('/example', function () {
    return response()->json(['message' => 'This is an example API endpoint'], 200);
});


Route::get('/transactions', [ApiController::class, 'test']);
