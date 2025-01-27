<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class Admin_Controller extends Controller
{
    public function admin_page()
    {
        $user = Auth::user();

        if($user && $user->isadmin())
            return view("front.admin");
        else
            return redirect()->route('home_href')->with('error', 'Admin değilsiniz.');

    }

    public function add_movie(Request $request)
    {
        $validated = $request->validate([
            'movieName' => 'required',
            'movieDuration' =>'required|numeric',
            'movieOriginalName' => 'required',
            'movieReleaseDate' => 'required|numeric|min:1800|max:2200',
            'movieChooseCategory' => 'required',
            'movieScreenWriter' => 'required',
            'movieDirector' => 'required',
            'movieImdbScore' => 'required|numeric|max:10',
            'movieActorActress1' => '',
            'movieActorActress2' => '',
            'movieActorActress3' => '',
            'movieActorActress4' => '',
            'movieActorActress5' => '',
            'movieCover' => '',
            'movieTrailer' => '',
            'movieSummary' => 'required',
        ]);
        $request = Movie::create([
            'Movie_Name' => $validated['movieName'],
            'Movie_Original_Name' => $validated['movieOriginalName'],
            'Movie_Release_Year' => $validated['movieReleaseDate'],
            'Category' => $validated['movieChooseCategory'],
            'Writer' => $validated['movieScreenWriter'],
            'Director' => $validated['movieDirector'],
            'IMDB_Point' => $validated['movieImdbScore'],
            'Actor1' => $validated['movieActorActress1'],
            'Actor2' => $validated['movieActorActress2'],
            'Actor3' => $validated['movieActorActress3'],
            'Actor4' => $validated['movieActorActress4'],
            'Actor5' => $validated['movieActorActress5'],
            'Movie_Duration' => $validated['movieDuration'],
            'Movie_Cover_URL' => $validated['movieCover'] ?? 'bluescreen_Sjlpoul.width-1000.format-webp.webp',
            'Movie_Trailer_URL' => $validated['movieTrailer'] ?? 'https://youtu.be/AjWfY7SnMBI',
            'Movie_Story' => $validated['movieSummary'],
        ]);
    
        if($request)
            return redirect()->route('admin_page')->with('success', 'Film başarıyla eklendi.');
        else
            return redirect()->route('admin_page')->with('custom', 'Film eklenemedi.');
    }
}
