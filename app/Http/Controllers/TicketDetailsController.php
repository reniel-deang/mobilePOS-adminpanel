<?php

namespace App\Http\Controllers;

use App\Models\ticket_details;

use Illuminate\Http\Request;

class TicketDetailsController extends Controller
{
    //

    public function fetch_company_details()
    {
        $fetch = ticket_details::all();

        $data = [
            "status"=> 200,
            'details' => $fetch,
        ];

        return response()->json($data, 200);
    }
}
