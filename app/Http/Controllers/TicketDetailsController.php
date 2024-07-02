<?php

namespace App\Http\Controllers;

use App\Models\mobilepos_configuration;
use App\Models\ticket_details;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketDetailsController extends Controller
{
    //

    public function fetch_company_details()
    {
        $fetch = ticket_details::all();
        $settings = mobilepos_configuration::select('apitime_scheduling', 'parking_rate', 'toilet_rate')->where('id', 1)->get();

        $data = [
            "status"=> 200,
            "apitime_sheduling" =>  $settings->pluck('apitime_scheduling'),
            "parking_rate" => $settings->pluck('parking_rate'),
            "toilet_rate" => $settings->pluck('toilet_rate'),
            'details' => $fetch,
        ];

        return response()->json($data, 200);

    }

}
