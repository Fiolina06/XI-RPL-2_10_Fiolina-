<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view ('home', [
        "title" => "Home"
    ]);
});


Route::get('/gallery', function () {
    return view ('Gallery', [
        "title" => "Gallery"
    ]);
});

Route::get('/about', function(){
    return view('about', [
        "title" => "About",
        "nama" => " Fiolina Tafani ",
        "email" => "tafanifiolina@gmail.com",
        "gambar" => "telkom.png"

    ]);
});

Route::resource('/contacts', ContactController::class);
use App\Http\Controllers\ContactController;