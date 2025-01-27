<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class Comment_Controller extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'comment' => 'required|string|max:1000', 
            'movie_id' => 'required', 
        ]);

        $comment = new Comment();
        $comment->Comment = $validated['comment'];
        $comment->User_ID = auth()->id(); 
        $comment->Movie_ID = $validated['movie_id']; 
        $comment->save();

        if($comment)
            return redirect()->back()->with('success', 'Yorumunuz başarıyla gönderildi!');
        else
            return redirect()->back()->with('error', 'Yorumunuz yayınlanamadı.');
    }
}
