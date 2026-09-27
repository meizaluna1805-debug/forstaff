<?php

Route::get('/', function(){
    return view('pages.home');
});

Route::view('/tentang-kami', 'pages.about')
    ->name('about');