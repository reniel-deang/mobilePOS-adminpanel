<?php

use App\Http\Controllers\TicketDetailsController;
use App\Http\Controllers\UserDataController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/fetch', [TicketDetailsController::class, 'fetch_company_details']);
