<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class Comment_Controller extends Controller
{
    public function submit(Request $request)
    {
        // Form verilerini doğrula
        $validated = $request->validate([
            'comment' => 'required|string|max:1000', // Yorum alanı zorunlu, string ve maksimum 1000 karakter
            'movie_id' => 'required', // Film ID'si (opsiyonel)
        ]);

        // Yorumu kaydet
        $comment = new Comment();
        $comment->Comment = $validated['comment'];
        $comment->User_ID = auth()->id(); // Giriş yapan kullanıcının ID'si (opsiyonel)
        $comment->Movie_ID = $validated['movie_id']; // Film ID'si (opsiyonel)
        $comment->save();

        if($comment)
            return redirect()->back()->with('success', 'Yorumunuz başarıyla gönderildi!');
        else
            return redirect()->back()->with('error', 'Yorumunuz yayınlanamadı.');
    }
}
