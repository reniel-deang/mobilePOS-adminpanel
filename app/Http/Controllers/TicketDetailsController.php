<?php

namespace App\Http\Controllers;

use App\Models\issued_tickets;
use App\Models\mobilepos_configuration;
use App\Models\ticket_details;
use App\Models\toilet_receipt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TicketDetailsController extends Controller
{
    //

    public function fetch_company_details(Request $request)
    {
        //$request->user()->currentAccessToken()->delete();


        
        $fetch = ticket_details::all();
        $settings = mobilepos_configuration::select('apitime_scheduling', 'parking_rate', 'toilet_rate')->where('id', 1)->first();
        $data = [
            "status"=> 200,
            "apitime_sheduling" =>  $settings->pluck('apitime_scheduling'),
            "parking_rate" => $settings->pluck('parking_rate'),
            "toilet_rate" => $settings->pluck('toilet_rate'),
            'details' => $fetch,
        ];

        $headers = 
        [
            'Content-Type' => 'application/json'
        ];

        return response()->json($data, 200, $headers);

    }

    public function update_ticket(Request $request, ticket_details $ticket_details)
    {

        $attributes = $request->validate([
            'title' => ['required'],
            'toilet_title' => ['required'],
            'company_name' => ['required'],
            'company_address' => ['required'],
            'footer' => ['required'],
        ]);


       $ticket_details->update($attributes);

       return back()->with('status' , 'Ticket details sucessfully updated! ');
       
    }

    public function update_ticketprice(Request $request)
    {

        $request->validate([
            'parking_rate' => ['required','numeric','regex:/^[0-9]+$/'],
        ]);

        mobilepos_configuration::where('id', 1)->update(['parking_rate' => $request->parking_rate]);

        return back()->with('status' , 'Parking price sucessfully updated! ');



    }

    public function update_toiletprice(Request $request)
    {
        
        $request->validate([
            'toilet_rate' => ['required','numeric','regex:/^[0-9]+$/'],
        ]);

        mobilepos_configuration::where('id', 1)->update(['toilet_rate' => $request->toilet_rate]);

        return back()->with('toiletstatus' , 'Ticket price sucessfully updated! ');
    }

    
    public function insert_mobileposdata(Request $request)
{
    // Retrieve the data from the request
    $data = $request->all();

    // Define validation rules
    $rules = [
        '*.ticket_number' => 'required|string',
        '*.plate_number' => 'required|string|max:255',
        '*.time-in' => 'required|date_format:Y-m-d H:i:s',
        // '*.time-out' => 'required|date_format:Y-m-d H:i:s|after_or_equal:*.time_in',
        // '*.hours' => 'required|numeric|min:0',
        // '*.total' => 'required|numeric|min:0',
        '*.time-out' => 'nullable',
        '*.hours' => 'nullable',
        '*.total' => 'nullable|numeric|min:0',
        '*.status' => 'required|string|in:paid,unpaid'
    ];

    // Validate the request data
    $validator = Validator::make($data, $rules);

    if ($validator->fails()) {
        // If validation fails, return error response
        return response()->json(['errors' => $validator->errors()], 422);
    }

    // Insert valid data into the database
    foreach ($data as $item) {
        issued_tickets::create($item);
    }

    // Return success response
    return response()->json([
        'message' => 'Data inserted successfully',
        'status' => '200'
    ], 200);
}

public function insert_mobileposdata_toilet(Request $request)
{
    // Retrieve the data from the request
    $data = $request->all();

    // Define validation rules
    $rules = [
        '*.price' => 'required|string',
        '*.time' => 'required',
    ];

    // Validate the request data
    $validator = Validator::make($data, $rules);

    if ($validator->fails()) {
        // If validation fails, return error response
        return response()->json(['errors' => $validator->errors()], 422);
    }

    // Insert valid data into the database
    foreach ($data as $item) {
        toilet_receipt::create($item);
    }

    // Return success response
    return response()->json([
        'message' => 'Data inserted successfully',
        'status' => '200'
    ], 200);
}

}
