<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Login_Register_Controller extends Controller
{
    public function login_register_page()
    {
        return view("front.login_register");
    }

    public function login_form(Request $request)
    {
       
        dd($request -> all());
    }


    public function register_form(Request $request)
    {
     
        if($request->isMethod('post'))
        {
            $request->validate([
                'fullNameRegister' => 'required',
                'userNameRegister' => 'required',
                'emailRegister' => 'required|email',
                'nickname' => 'required',
                'passwordRegister' => 'required',
                'phoneNumberRegister' => 'required',
                'passwordRegisterAgain' => 'required',
            ]);
            try{
                $is_nickname = users::where('User_Name', $request->input('fullNameRegister'))->exists();
                $is_email = users::where('email', $request->input('emailRegister'))->exists();
                if($is_nickname || $is_email) {
                    $message = 'Kullanıcı adı veya email adresi kullanılmaktadır!';
                    return view('register', ['message' => $message]);
                } else {
                    $user = new users();
                    $user->name = $request->input('fullNameRegister');
                    $user->userName = $request->input('userNameRegister');
                    $user->userMail = $request->input('emailRegister');
                    $user->phoneNumber = $request->input('phoneNumberRegister');
                    $user->userPassword = Hash::make($request->input('passwordRegister'));                   
                    if($request->input('passwordRegister') != $request->input('passwordRegisterAgain'))  
                    {
                    $message = 'Şifreler birbiri ile uyuşmamaktadır.';
                    return view('register', ['message' => $message]);
                    }              
                    $user-> userTypeId = 1;
                    $user->save();
                    $message = 'Kayıt başarılı';
                    return redirect('/')->with(['message' => $message]);
                }
            }catch (\Exception $e){
                $message = 'Bir hata oluştu';
                return view('register', ['message' => $message, 'error' => $e->getMessage()]);
            }
        }
        return view('register');
        }
    }