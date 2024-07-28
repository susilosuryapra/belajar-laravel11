<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // variable title dikirimkan ke halaman home.blade.php
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Susilo Surya Pradana', 'title' => 'About']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});