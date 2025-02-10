<?php
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/about', function () {
return view('about', ['name' =>'Apriansyah Fauzi ', 'title' => 'About' ]);
});
Route::get('/home', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' =>[
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Apriansyah Fauzi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
     A praesentium suscipit ab quas asperiores? Odit unde incidunt inventore et esse magni quibusdam,
      numquam quisquam ad similique voluptate a perferendis. Tempore'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Apriansyah Fauzi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Dolor officiis velit illum at, a vel esse mollitia sapiente amet recusandae 
            explicabo asperiores corporis doloremque. Ab veniam eos repellendus vitae laborum?.'
        ]
    ]]);
});

Route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Apriansyah Fauzi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
     A praesentium suscipit ab quas asperiores? Odit unde incidunt inventore et esse magni quibusdam,
      numquam quisquam ad similique voluptate a perferendis. Tempore'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Apriansyah Fauzi',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Dolor officiis velit illum at, a vel esse mollitia sapiente amet recusandae 
            explicabo asperiores corporis doloremque. Ab veniam eos repellendus vitae laborum?.'
        ]
        ];
        $post = Arr::first($posts, function($post) use($slug){
            return $post['slug'] == $slug;
        });

        return view('post', ['title' => 'Single Post', 'post' => $post]);
});
Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
