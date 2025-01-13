<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin_Controller extends Controller
{
    public function admin_page()
    {
        return view("front.admin");
    }
}
