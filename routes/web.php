<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home_Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get("/", [Home_Controller::class, "home_page"])->name('home_href');
Route::get("/about", [Home_Controller::class, "about_page"])->name('about_href');
Route::get("/contact", [Home_Controller::class, "contact_page"])->name('contact_href');
Route::get("/login_register", [Home_Controller::class, "login_register_page"])->name('login_register_href');
Route::get('/movie_detail', function () {
    return view('front.movie_detail');
});

Route::get('/admin', function () {
    return view('front.movie_add_admin');
});