<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home_Controller extends Controller
{

    public function home_page()
    {
        return view("front.index");
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
        return view("front.lists");
    }
}
