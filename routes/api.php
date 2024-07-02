<?php

use App\Http\Controllers\Data_Validation;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketDetailsController;
use App\Http\Controllers\UserDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/fetch', [TicketDetailsController::class, 'fetch_company_details']);

Route::post('/auth', [TicketDetailsController::class, 'login']);

Route::post('/platevalidation', [Data_Validation::class, 'validate']);

Route::post('/login', [LoginController::class, 'loginauth']);
