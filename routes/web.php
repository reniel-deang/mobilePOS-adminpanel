<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TicketDetailsController;
use App\Http\Controllers\ViewController;
use App\Models\User;
use Illuminate\Support\Facades\Route;


Route::get('/', function()
{
    return to_route('login');
});

//Route automatically redirect to login with a name login if you make a middleware with 'auth'
Route::get('/loginpage', function () {
    return view('loginpage');
})->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'weblogin']);
Route::get('/logout', [LoginController::class, 'weblogout']);



//view routes

Route::middleware('auth')->group(function() {
    
Route::get('/dashboard', [ViewController::class, 'viewdashboard']);
Route::get('/managecontent', [ViewController::class, 'managecontent']);
Route::get('/manageuser', [ViewController::class, 'manageuser']);
Route::get('/manageprice', [ViewController::class, 'manageprice']);
Route::get('/tabledata', [ViewController::class, 'tabledata']);
Route::post('/updateticket/{ticket_details}', [TicketDetailsController::class, 'update_ticket'])->name('update.ticket');
Route::post('/createuser', [ViewController::class, 'createuser']);
Route::post('/updateparkingprice', [TicketDetailsController::class, 'update_ticketprice']);
Route::post('/updatetoiletprice', [TicketDetailsController::class, 'update_toiletprice']);
Route::post('/updatepassword/{user}', [LoginController::class, 'update_password'])->name('update.password');
Route::delete('/deleteuser/{user}', [LoginController::class, 'delete_user'])->name('delete.user');

Route::get('/accountingdashboard', [ViewController::class, 'viewaccountingdashboard']);
Route::get('/accountingtabledata', [ViewController::class, 'accountingtabledata']);

});





Route::post('/changeticketdetails', function () {
    dd(request()->all());
});


Route::get('/test',[TicketDetailsController::class,'fetch_company_details']);

// Route::get('/get-user/{user}', [TicketDetailsController::class, 'fetchUser']);