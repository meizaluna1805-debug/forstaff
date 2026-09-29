<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('pages.home');
});

Route::view('/tentang-kami', 'pages.about')
    ->name('about');

// Halaman Harga
Route::view('/harga', 'pages.harga')->name('pricing');

Route::view('/register', 'pages.auth.register')->name('register');