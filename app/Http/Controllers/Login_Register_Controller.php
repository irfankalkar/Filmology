<?php

namespace App\Http\Controllers;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use GrahamCampbell\ResultType\Success;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        // Giriş başarısız, hata mesajı gösterebilirsiniz
        return back()->with('error', 'Kullanıcı adı veya şifre hatalı');
    }
    }

    // Google'a yönlendirme
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // Google'dan gelen callback
    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();

        // Google ID ile kullanıcıyı veritabanında bulmaya çalış
        $user = User::where('google_id', $googleUser->getId())->first();

        if (!$user) {
            // Yeni bir kullanıcı oluşturun
            $user = User::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'password' => bcrypt(Str::random(16)), // Şifre belirleyin
            ]);
        }

        // Kullanıcıyı oturum açtır
        Auth::login($user);

        return redirect()->route('home_href'); // İstediğiniz sayfaya yönlendirebilirsiniz
    }

    public function register_form(Request $request)
    {

         // Form validasyonu
         $validated = $request->validate([
            'fullNameRegister' => 'required|string|max:255',
            'userNameRegister' => 'required|string|max:255|unique:users,user_name',
            'phoneNumberRegister' => 'required|string|max:15',
            'emailRegister' => 'required|email',
            'passwordRegister' => 'required|string|min:8|same:passwordRegisterAgain',  // Şifrelerin eşleşmesi
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
            return redirect()->route('success')->with('success', 'Kayıt başarılı! Lütfen e-postanızı kontrol edin.');
        else
            return back()->with('error', 'Kayıt işlemi başarısız oldu.');
    }
        
    }