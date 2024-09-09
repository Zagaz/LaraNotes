<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        // Get user input
        $username = $request->input('text_username');
        $password =  $request->input('text_password');
        echo "OK";

    }
    public function logout()
    {
        return view('logout');;
    }
}
