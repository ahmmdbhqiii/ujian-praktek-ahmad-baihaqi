<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;


Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});


Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog Posts',
        'posts' => Post::all()
    ]);
});


Route::get('/posts/{post:slug}', function (Post $post) {
    return view('post', [
        'title' => 'Single Post',
        'post' => $post
    ]);
});


Route::get('/about', function () {
    return view('about', [
        'title' => 'About Us',
        'nama' => 'Ahmad Baihaqi'
    ]);
});


Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});