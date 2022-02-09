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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function (){
    return view ('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function (){
    return view ('about', [
        "title" => "Home",
        "nama" => " Haris Al-Fikri",
        "email" => "rizalfikri852@gmail.com",
        "gambar" => "haris.jpeg"
    ]) ;
});

Route::get('/gallery', function (){
    return view ('home', [
        "title" => "Gallery"
    ]);
});

Route :: get("/contacts", function(){
    return view('contacts', [
        "title" => "Contacts"
    ]);
});
