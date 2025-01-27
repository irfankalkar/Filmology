<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Movie;

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
        if ($comment->save())
            {
                $movie = Movie::find($validated['movie_id']);
                $movie->increment('Comment_Count');
            }
        if($comment)
            return redirect()->back();
        else
            return redirect()->back()->with('error', 'Yorumunuz yayınlanamadı.');
    }
}
