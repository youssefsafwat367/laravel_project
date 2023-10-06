<?php

use App\Http\Controllers\UploadManager;
use GuzzleHttp\Psr7\UploadedFile;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// -----------------------------   for users -------------------------
// homepage
Route::get('/', function () {
    return view('front.home');
})->name("Home_Page");
//majors page
Route::get('/majors', function () {
    return view('front.majors');
})->name("Majors_Page");
//doctors page
Route::get('/doctors', function () {
    return view('front.doctors');
})->name("Doctors_Page");
//login page
Route::get('/login', function () {
    return view('front.login');
})->name("Login_Page");
//booking page
Route::get('/booking', function () {
    return view('front.booking');
})->name("Booking_Page");
//register page
Route::get('/register', function () {
    return view('front.register');
})->name("Register_Page");
//contact page
Route::get('/contact', function () {
    return view('front.contact');
})->name("Contact_Page");
// -----------------------------   for admins -------------------------
//home page
Route::get('/home', function () {
    return view('admin.index');
})->name("Admin_Home_page");
//Users page
Route::get('/admin/users','UserController@index' )->name("View_Users");





