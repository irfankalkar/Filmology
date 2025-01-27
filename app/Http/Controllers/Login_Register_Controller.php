<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Login_Register_Controller extends Controller
{
    public function login_register_page()
    {
        return view("front.login_register");
    }

    public function login_form(Request $request)
    {
        $validated = $request->validate([
            'userNameLogin' => 'required',
            'passwordLogin' => 'required'
           ]);
           $user = User::where('User_Name', $validated['userNameLogin'])->first();
           $usermail = User::where('User_Mail', $validated['userNameLogin'])->first();
           if ($user && Hash::check($validated['passwordLogin'], $user->User_Password)) {
            Auth::login($user);
            return redirect()->route('home_href')->with('success', 'Başarıyla giriş yaptınız!');
           }
            else if($usermail && Hash::check($validated['passwordLogin'], $usermail->User_Password))
            {
                Auth::login($usermail);
                return redirect()->route('home_href')->with('success', 'Başarıyla giriş yaptınız!');
            }
         else {
            return back()->with('error', 'Kullanıcı adı veya şifre hatalı');
        }
    }


    public function register_form(Request $request)
    {
        $validated = $request->validate([
            'fullNameRegister' => 'required|string|max:255|min:3',
            'userNameRegister' => 'required|string|max:255|min:3|unique:users,User_Name',
            'phoneNumberRegister' => 'required|string|max:15',
            'emailRegister' => 'required|email|unique:users,User_Mail',
            'passwordRegister' => 'required|string|min:8|same:passwordRegisterAgain',
        ]);
 
        // Yeni kullanıcı oluşturma
        $request = User::create([
            'Name' => $validated['fullNameRegister'],
            'User_Name' => $validated['userNameRegister'],
            'Phone_Number' => $validated['phoneNumberRegister'],
            'User_Mail' => $validated['emailRegister'],
            'User_Type_ID' => 1,
            'User_Password' => Hash::make($validated['passwordRegister']),
        ]);
 
        if($request)
            return redirect()->route('home_href')->with('success', 'Kayıt başarılı!');
        else
            return back()->with('error', 'Kayıt işlemi başarısız oldu.');
    }


}
