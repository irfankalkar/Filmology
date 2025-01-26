<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Home_Controller;
use App\Http\Controllers\Theme_Controller;
use App\Http\Controllers\Login_Register_Controller;
use App\Http\Controllers\Movie_Details_Controller;
use App\Http\Controllers\Admin_Controller;
use App\Http\Controllers\Movie_Details;
use App\Http\Controllers\Contact_Controller;
use App\Http\Controllers\Movie_Search_Controller;
use App\Http\Controllers\Comment_Controller;

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

Route::get("/",[Home_Controller::class,"home_page"]) -> name('home_href');
Route::get("/list/{category}",[Home_Controller::class,"home_page_category"]) -> name('category');
Route::post('/search', [Home_Controller::class, 'search'])->name('search');
Route::get("/about",[Home_Controller::class, "about_page"]) -> name('about_href');
Route::get("/lists",[Home_Controller::class, "lists_page"]) -> name('lists_href');
Route::get("/contact",[Home_Controller::class, "contact_page"]) -> name('contact_href');

Route::get("/login_register",[Login_Register_Controller::class, "login_register_page"]) -> name('login_register_href');
Route::post("/logged_in",[Login_Register_Controller::class, "login_form"]) -> name('login_form_href');
Route::post("/registered",[Login_Register_Controller::class, "register_form"]) -> name('register_form_href');
Route::post('/contact/send', [Contact_Controller::class, 'send'])->name('contact.send');
Route::get("/movie_details/{Movie_ID}",[Movie_Details_Controller::class, "movie_details_page"])->name('movie_details');
Route::get('/random', [Movie_Details_Controller::class, 'random_movie'])->name('random');
Route::post('/comment/submit', [Comment_Controller::class, 'submit'])->name('comment.submit');

Route::post('/logout', function () {
    Auth::logout();
    return redirect(route('home_href'));
})->name('logout');
Route::post('/contact', [Contact_Controller::class, 'send'])->name('contact_send');
Route::get("/admin",[Admin_Controller::class, "admin_page"]);
Route::post("/admin",[Admin_Controller::class, "add_movie"])->name('add_movie');

// Route::get("/l",[Theme_Controller::class, "light_theme"]) -> name('light_href');
// Route::get("/d",[Theme_Controller::class, "dark_theme"]) -> name('dark_href');