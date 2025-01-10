<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login_Register_Controller extends Controller
{
    public function login_register_page()
    {
        return view("front.login_register");
    }

    public function login_form(Request $request)
    {
        // dd($request -> userNameLogin);
        // dd($request -> passwordLogin);
        dd($request -> all());
    }


    public function register_form(Request $request)
    {
        // dd($request -> fullNameRegister);
        // dd($request -> userNameRegister);
        // dd($request -> phoneNumberRegister);
        // dd($request -> emailRegister);
        // dd($request -> passwordRegister);
        // dd($request -> passwordRegisterAgain);
        dd($request -> all());
    }


}
