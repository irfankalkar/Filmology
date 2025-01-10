<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home_Controller;
use App\Http\Controllers\Theme_Controller;
use App\Http\Controllers\Login_Register_Controller;

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



Route::get("/",[Home_Controller::class, "home_page"]) -> name('home_href');
Route::get("/about",[Home_Controller::class, "about_page"]) -> name('about_href');
Route::get("/contact",[Home_Controller::class, "contact_page"]) -> name('contact_href');

Route::get("/login_register",[Login_Register_Controller::class, "login_register_page"]) -> name('login_register_href');
Route::post("/logged_in",[Login_Register_Controller::class, "login_form"]) -> name('login_form_href');
Route::post("/registered",[Login_Register_Controller::class, "register_form"]) -> name('register_form_href');

// Route::get("/l",[Theme_Controller::class, "light_theme"]) -> name('light_href');
// Route::get("/d",[Theme_Controller::class, "dark_theme"]) -> name('dark_href');