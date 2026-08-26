<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home', ['title' => 'Home Page']);
});

Route::get('/blog', function () {
    return view('Blog', ['title' => 'Blog']);
});
Route::get('/about', function () {
    return view('About', ['title' => 'About']);
});

Route::get('/contact', function () {
    return view('Contact', ['title' => 'contact']);
});