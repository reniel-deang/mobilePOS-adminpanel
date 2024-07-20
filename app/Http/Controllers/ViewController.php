<?php

namespace App\Http\Controllers;

use App\Models\issued_tickets;
use App\Models\mobilepos_configuration;
use App\Models\ticket_details;
use App\Models\toilet_receipt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class ViewController extends Controller
{
    public function viewdashboard()
    {
        $logincount = DB::table('personal_access_tokens')->get()->count(); 
        $usercount = DB::table('users')->get()->count(); 

        $lahat = [
            'usercount' => $usercount,
            'logincount' => $logincount,

        ];

        //carbon for datetime
        //yung carbon now kinukuha yung date ngayon
        //issued_tickets::whereYear - yung first parameter yung column name ng database
        //Carbon::now() -  rirereturn yung datetime ngayon
        //format('Y') - format lang sa Year Y = "year" F = "Full month name" m = "month in number" d = "day"
        //orderBy('created_at', 'asc') - i arrange ng ascending depending sa date
        //groupBy(function($item){
           // return Carbon::parse($item->created_at)->format('F');
        //})
    
        $ticketcount = issued_tickets::whereYear('created_at', Carbon::now()->format('Y'))->where('status', 'paid')->orderBy('created_at', 'asc')->get()->groupBy(function($item){
            return Carbon::parse($item->created_at)->format('F');
        });

        $ticketcount1 = toilet_receipt::whereYear('created_at', Carbon::now()->format('Y'))->orderBy('created_at', 'asc')->get()->groupBy(function($item){
            return Carbon::parse($item->created_at)->format('F');
        });


        $months = [
            'January' => 0,
            'February' => 0,
            'March' => 0,
            'April' => 0,
            'May' => 0,
            'June' => 0,
            'July' => 0,
            'August' => 0,
            'September' => 0,
            'October' => 0,
            'November' => 0,
            'December' => 0,
            
        ];

        $months1 = [
            'January' => 0,
            'February' => 0,
            'March' => 0,
            'April' => 0,
            'May' => 0,
            'June' => 0,
            'July' => 0,
            'August' => 0,
            'September' => 0,
            'October' => 0,
            'November' => 0,
            'December' => 0,
            
        ];

        

        foreach($ticketcount as $month => $value)
        {
            $months[$month] = $ticketcount[$month]->count();

        } 

        foreach($ticketcount1 as $month1 => $value)
        {
            $months1[$month1] = $ticketcount1[$month1]->count();

        } 

        $fetchprice = mobilepos_configuration::all()->where('id', 1)->first();


        return view('/dashboard', compact('lahat','months','months1','fetchprice'));
    }

    public function viewaccountingdashboard()
    {
        $logincount = DB::table('personal_access_tokens')->get()->count(); 
        $usercount = DB::table('users')->get()->count(); 

        $lahat = [
            'usercount' => $usercount,
            'logincount' => $logincount,

        ];

        $ticketcount = issued_tickets::whereYear('created_at', Carbon::now()->format('Y'))->orderBy('created_at', 'asc')->get()->groupBy(function($item){
            return Carbon::parse($item->created_at)->format('F');
        });

        $ticketcount1 = toilet_receipt::whereYear('created_at', Carbon::now()->format('Y'))->orderBy('created_at', 'asc')->get()->groupBy(function($item){
            return Carbon::parse($item->created_at)->format('F');
        });


        $months = [
            'January' => 0,
            'February' => 0,
            'March' => 0,
            'April' => 0,
            'May' => 0,
            'June' => 0,
            'July' => 0,
            'August' => 0,
            'September' => 0,
            'October' => 0,
            'November' => 0,
            'December' => 0,
            
        ];

        $months1 = [
            'January' => 0,
            'February' => 0,
            'March' => 0,
            'April' => 0,
            'May' => 0,
            'June' => 0,
            'July' => 0,
            'August' => 0,
            'September' => 0,
            'October' => 0,
            'November' => 0,
            'December' => 0,
            
        ];

        

        foreach($ticketcount as $month => $value)
        {
            $months[$month] = $ticketcount[$month]->count();

        } 

        foreach($ticketcount1 as $month1 => $value)
        {
            $months1[$month1] = $ticketcount1[$month1]->count();

        } 

        $fetchprice = mobilepos_configuration::all()->where('id', 1)->first();


        return view('accounting.accountingdashboard', compact('lahat','months','months1','fetchprice'));
    }

    public function managecontent()
    {
        $fetch = ticket_details::all()->where('id', 1)->first();
        
        return view('/managecontent', [
            'ticketdetails' => $fetch
        ]);
    }

    public function manageuser()
    {
        $users = User::where('user_type', 'attendant')->get();
        $users1 = User::where('user_type', 'accounting')->get();
        $users2 = User::where('user_type', 'admin')->get();
        return view('/manageuser', compact('users','users1','users2'));
    }

    public function manageprice()
    {
        $settings = mobilepos_configuration::select('apitime_scheduling', 'parking_rate', 'toilet_rate')->where('id', 1)->first();
    
        return view('manageprice', [
            'settings' => $settings,
        ]
        );
    }

    public function createuser(Request $request)
{
    $validatedata = $request->validate(
        [
            'username' => ['required', 'unique:users,username'],
            'password' => ['required', 'min:6'],
            'user_type' => ['required']
        ]
    );

    User::create([
        'username' => $validatedata['username'],
        'password' => bcrypt($validatedata['password']),
        'user_type' => $validatedata['user_type']
    ]);

    return back()->with('createuser', 'User Created Successfully');
}
    public function tabledata()
    {
        $parking = issued_tickets::all();
        $toilet = toilet_receipt::all();
        return view('tabledata', compact('parking','toilet'));
    }

    public function accountingtabledata()
    {
        $parking = issued_tickets::all();
        $toilet = toilet_receipt::all();
        return view('accounting.accountingtabledata', compact('parking','toilet'));
    }



   
}
