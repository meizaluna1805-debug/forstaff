<?php

use Illuminate\Support\Facades\Route;

// Halaman utama
Route::view('/', 'pages.home')->name('home');

Route::view('/tentang-kami', 'pages.about')->name('about');

Route::view('/fitur', 'pages.fitur')->name('features');

Route::view('/harga', 'pages.harga')->name('pricing');

Route::view('/portofolio', 'pages.portofolio')->name('portfolio.index');

Route::view('/kontak', 'pages.kontak')->name('contact');

// Blog
Route::view('/blog', 'pages.blog')->name('blog.index');

Route::get('/blog/{slug}', function ($slug) {
    return view('pages.blog-detail', compact('slug'));
})->name('blog.show');

// Tampilan autentikasi
Route::view('/register', 'pages.auth.register')->name('register');

Route::view('/login', 'pages.auth.login')->name('login');