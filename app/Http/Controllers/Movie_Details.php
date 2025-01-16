<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Movie_Details extends Controller
{
    public function movie_details_page()
    {
        return view("front.movie_details");
    }
}
