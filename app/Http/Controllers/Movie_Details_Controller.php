<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\Comment;
use App\Models\User;
use Illuminate\Http\Request;

class Movie_Details_Controller extends Controller
{
    public function movie_details_page($Movie_ID)
    {
        $comments = Comment::all();
        $user = User::all();
        $movie = Movie::where('Movie_ID', $Movie_ID)->first();
        $mightLike = Movie::where('Category', $movie->Category)->inRandomOrder()->take(6)->get();
        if ($movie && $movie->View_Count < 2147483647) {
            $movie->View_Count++;
            $movie->save();
        }
        return view('front.movie_details', compact('movie','mightLike','comments','user'));
    }

    public function random_movie()
    {
        $minId = Movie::min('Movie_ID');
        $maxId = Movie::max('Movie_ID');
 
       $randomId = rand($minId, $maxId);
       $movie = Movie::where('Movie_ID', $randomId)->first();
 
       
        while (!$movie) {
           $randomId = rand($minId, $maxId);
           $movie = Movie::where('Movie_ID', $randomId)->first();
       }
       return redirect()->route('movie_details', ['Movie_ID' => $movie->Movie_ID]);
    }
 
}
