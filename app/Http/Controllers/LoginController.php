<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class LoginController extends Controller
{
    //
    public function loginauth(Request $request)
{
    // Validate the request
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

    // Check if the user has the 'attendant' user type
    if ($user->user_type !== 'attendant') {
        return response()->json([
            'message' => 'User not found',
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
}


    public function logoutauth(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        $data = [
            "status"=> 200,
            "message"=> "Deleted successfully"
        ];

        $headers = 
        [
            'Content-Type' => 'application/json'
        ];

        return response()->json($data, 200, $headers);

    }

    public function weblogin(Request $request)
    {
        $login = $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]
            );


            if(! Auth::attempt($login))
            {
                throw ValidationValidationException::withMessages([
                    'username' => 'Sorry, Those credentials do not match'
                ]);
            }

            

            if($request->user()->user_type == "admin")
            {
                return redirect('/dashboard');
            }

            if($request->user()->user_type == "accounting")
            {
                return redirect('accountingdashboard');
            }

            else
            {
                Auth::logout();
                Session::flush();
                return redirect('/');
            }


        

    }

    public function weblogout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/');
    }

    



    public function update_password(Request $request, User $user)
    {
        $validatedpassword = $request->validate(
            [
                'newpassword' => ['required', 'min:6']
            ]
        );

        $result = $user->update([
            'password' => Hash::make($validatedpassword['newpassword'])
        ]);

       
        return back()->with('updatepassword', 'Password Updated Sucessfully');
    }

    

    public function delete_user(User $user)
{
    $user->delete();

    return back()->with('deletestatus', 'User deleted successfully');
}
}
