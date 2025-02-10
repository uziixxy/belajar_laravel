<?php
namespace App\Models;
use Illuminate\Support\Arr;

class Post{
  public static function all()
  {
      
      return [
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
  }
  public static function find($slug): array
  {
    $post = Arr::first(static::all(), fn($post)=> $post ['slug'] == $slug);

    if(! $post){
      abort(404);
    }
    return $post;
  }
}