<?php

use Illuminate\Support\Facades\Route;


Route::get('/about', function () {
return view('about', ['name' =>'Apriansyah Fauzi ', 'title' => 'About' ]);
});
Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
