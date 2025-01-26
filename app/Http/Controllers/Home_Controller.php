<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use Illuminate\Http\Request;

class Home_Controller extends Controller
{
    public function home_page()
    {
        $movies = Movie::paginate(24);
        $random = Movie::inRandomOrder()->take(3)->get();
        $trailer = $random[0]->Movie_Trailer_URL;
        return view('front.index', compact('movies','random','trailer'));
    }

    public function home_page_category($category)
    {
        $movies = Movie::where('Category', $category)->paginate(24);
        $random = Movie::inRandomOrder()->take(3)->get();
        $trailer = $random[0]->Movie_Trailer_URL;
        return view('front.index', compact('movies','random','trailer'));
    }
    
    public function about_page()
    {
        return view("front.about");
    }


    public function contact_page()
    {
        return view("front.contact");
    }


    public function lists_page()
    {
        $latestMovies = Movie::orderBy('Movie_Release_Year', 'desc')->take(6)->get();
        $topRatedMovies = Movie::orderBy('IMDB_Point', 'desc')->take(6)->get();
        $mostViewedMovies = Movie::orderBy('View_Count', 'desc')->take(6)->get();
        $random = Movie::inRandomOrder()->take(3)->get();
        $trailer = $random[0]->Movie_Trailer_URL;
        return view("front.lists",compact('latestMovies','topRatedMovies','mostViewedMovies','random','trailer'));
    }

    public function search(Request $request)
    {
        $validated = $request->validate([
            'searchInput' => 'string|max:255|min:2',
        ]);
        $searchTerm = strtolower($validated['searchInput']);
        $movies = Movie::whereRaw('LOWER(Movie_Name) REGEXP ?', [preg_quote($searchTerm)])
        ->paginate(24);
        if ($movies->isEmpty()) {
            return redirect()->route('home_href')->with('error', 'Aradığınız kriterlere uygun film bulunamadı.');
        }
        $random = Movie::inRandomOrder()->take(3)->get();
        $trailer = $random->isEmpty() ? null : $random[0]->Movie_Trailer_URL;
        return view('front.index', compact('movies', 'random', 'trailer'));
    }
}
