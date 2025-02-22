<?php
use Illuminate\Support\Arr;
use App\Models\Post;
use Illuminate\Support\Facades\Route;



Route::get('/about', function () {
return view('about', ['name' =>'Apriansyah Fauzi ', 'title' => 'About' ]);
});
Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => Post::all()]);
});

Route::get('/posts/{post:slug}', function(Post $post){
       // $post = Post::find($id);

        return view('post', ['title' => 'Single Post', 'post' => $post]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
