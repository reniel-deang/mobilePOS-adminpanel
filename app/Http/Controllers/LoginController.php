<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;



class LoginController extends Controller
{
    //
    public function loginauth(Request $request)
    {// Validate the request
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation error',
                'errors' => $validator->errors(),
                'status' => 422,
            ], 422);
        }

        // Attempt to find the user and verify the password
        $user = User::where('username', $request->username)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Invalid credentials',
                'status' => 404,
            ], 404);
        }

        // Generate a token
        $token = $user->createToken('auth_token')->plainTextToken;

        // Return the token
        return response()->json([
            'access_token' => $token,
            'status' => 200,
            'token_type' => 'Bearer',
        ], 200);

        /*
        if(! Auth::attempt($log_details))
        {
            return response()->json([
                'response' => 'error',
                'message' => 'username not found'
            ], 200); 
        }
        else
        {
            return response()->json([
                'response' => 'success',
                'message' => 'username Successfull'
            ], 200); 
        }
        */

        
    }
}
