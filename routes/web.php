<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/fitur', function () {
    return view('pages.fitur');
})->name('features');

Route::get('/portofolio', function () {
    return view('pages.portofolio');
})->name('portfolio.index');

Route::view('/kontak', 'pages.kontak')->name('contact');

Route::view('/blog', 'pages.blog')->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    return view('pages.blog-detail', compact('slug'));
})->name('blog.show');