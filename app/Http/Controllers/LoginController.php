<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;



class LoginController extends Controller
{
    //
    public function loginauth(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->username)->first();

        return "$user";


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
