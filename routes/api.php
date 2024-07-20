<?php

use App\Http\Controllers\Data_Validation;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketDetailsController;
use App\Http\Controllers\UserDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'loginauth']);
Route::get('/logout', [LoginController::class, 'logoutauth'])->middleware('auth:sanctum');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/fetch', [TicketDetailsController::class, 'fetch_company_details'])->middleware('auth:sanctum');
Route::post('/upload', [TicketDetailsController::class, 'insert_mobileposdata']);
Route::post('/uploadtoilet', [TicketDetailsController::class, 'insert_mobileposdata_toilet']);

Route::post('/auth', [TicketDetailsController::class, 'login']);

Route::post('/platevalidation', [Data_Validation::class, 'validate'])->middleware('auth:sanctum');