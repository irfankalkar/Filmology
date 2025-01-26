<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Contact_Form_Mail;
use Illuminate\Support\Facades\Mail;

class Contact_Controller extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'fullNameContant' => 'required|string',
            'telephoneContant' => 'required|max:15',
            'emailContant' => 'required|email',
            'messageSubjectContant' => 'required|string',
            'messageContant' => 'required|string',
        ]);

        // E-posta gönder
        Mail::to('filmology21@gmail.com')->send(new Contact_Form_Mail($data));

        // Başarılı yanıt döndür
        return redirect()->back()->with('success', 'Mesajınız başarıyla gönderildi!');
    }
}
