<?php

use App\Http\Controllers\TicketDetailsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test',[TicketDetailsController::class,'fetch_company_details']);