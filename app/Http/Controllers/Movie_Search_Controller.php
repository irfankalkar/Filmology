<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Movie;

class Movie_Search_Controller extends Controller
{
        public function search(Request $request)
        {
            $validated = $request->validate([
                'searchInput' => 'required|string|min:2',
            ]);
            $movies = Movie::whereRaw('LOWER(Movie_Name) LIKE ?', ['%' . strtolower($validated['searchInput']) . '%'])
            ->get();
            if ($movies->isEmpty()) {
             return redirect()->route('home_href')->with('error', 'DENEME!');
            }
            $random = Movie::inRandomOrder()->take(3)->get();
            $trailer = $random[0]->Movie_Trailer_URL;            
            return view('front.index', compact('movies','random','trailer'));
        }
}