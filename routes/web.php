<?php

Route::get('/', function(){
    return view('pages.home');
});

Route::view('/tentang-kami', 'pages.about')
    ->name('about');

// Halaman Harga
Route::view('/harga', 'pages.harga')->name('pricing');