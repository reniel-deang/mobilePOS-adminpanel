<?php

namespace App\Http\Controllers;

use App\Models\issued_tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Data_Validation extends Controller
{
    //
    public function validate(Request $request)
    {
        // Define validation rules
        $rules = [
            'plate_number' => 'required|string',
        ];
    
        // Create a validator instance
        $validator = Validator::make($request->all(), $rules);
    
        // Check if validation fails
        if ($validator->fails()) {
            // Handle validation failure
            return response()->json([
                'response' => 'error',
                'errors' => $validator->errors(),
            ], 422); // 422 Unprocessable Entity
        }
    
        // Check if plate_number exists in the database with status
        $plate_number = $request->input('plate_number');
        $vehicle = issued_tickets::where('plate_number', $plate_number)->first();
    
        if ($vehicle) {
            // Check the status of the vehicle
            if ($vehicle->status == 'pending') {
                // Status is pending
                return response()->json([
                    'response' => 'error',
                    'message' => 'Plate number status is pending',
                ], 409); // 409 Conflict
            } elseif ($vehicle->status == 'ok') {
                // Status is OK
                return response()->json([
                    'response' => 'ok',
                    'message' => 'Validation passed, plate number is OK',
                ]);
            } else {
                // Handle other statuses if necessary
                return response()->json([
                    'response' => 'error',
                    'message' => 'Plate number has an unknown status',
                ], 409); // 409 Conflict
            }
        }
    
        // plate_number does not exist
        return response()->json([
            'response' => 'ok',
            'message' => 'Validation passed, plate number does not exist in the database',
        ]);
    }
}
