<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', ['nama' =>'Apriansyah Fauzi'] );
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
