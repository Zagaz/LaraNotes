<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

// XbZBteXJ1Flis8bM DB

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginSubmit(Request $request)
    {
        //form validation
        $request->validate(
            //Rules
            [
                'text_username' => 'required|email',
                'text_password' => 'required|min:6|max:16'

            ],
            //error messages
            [
                'text_username.required' => 'Email is required',
                'text_username.email' => 'Email must be a valid email',
                'text_password.required' => 'Password is required',
                'text_password.min' => 'Password must be at least 6 characters',
                'text_password.max' => 'Password must be at most 16 characters'

            ]
        );

        echo "Form Submitted Successfully";

   // test if we have connection is working

   try{
    DB::connection()->getPdo();
    echo "Connected successfully to: " . DB::connection()->getDatabaseName();
   } catch (\Exception $e) {
    die("Could not connect to the database. Please check your configuration. error:" . $e );
    }









    }
    public function logout()
    {
        return view('logout');;
    }
}
