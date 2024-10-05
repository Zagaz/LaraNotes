<?php

namespace App\Http\Controllers;

use App\Models\User;
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
                'text_password' => 'required|min:1|max:16'

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


        $username = $request->input('text_username');
        $password = $request->input('text_password');

        //check if the user exists

        $user = User::where('username', $username)
                ->where('deleted_at',NULL)
                ->first();

            if(!$user)
            {
                return redirect()
                        ->back()
                        ->withInput()
                        ->with("loginError","Username or Password is incorrect");
            }
            if(!password_verify($password,$user->password))
            {
                return redirect()
                        ->back()
                        ->withInput()
                        ->with("loginError","Username or Password is incorrect");
            }
            //update lastlogin
            $user->last_login = date('Y-m-d H:i:s');
            $user->save();
            session([
                'user' => [
                    'id' => $user->id,
                    'username' => $user->username,
                ]

            ]);
            // redirect to the home page
            return redirect()->to('/');



    }

    public function logout()
    {
        session()->forget('user');
        return redirect()
               ->to('/login');
    }
}
