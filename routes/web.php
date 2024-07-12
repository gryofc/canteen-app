<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Post;
use App\Models\User;
use Faker\Provider\Lorem;

Route::get('/', function () {
    return view('home',['title'=>'Home Page']);
});

Route::get('/posts', function(){
    return view('posts', ['title'=>'Blog', 'posts'=> Post::all()]);
});

Route::get('/posts/{post:slug}', function(Post $post){

    // $post = Post::find($slug);    
    return view('post',['title' => 'Single Post', 'post' => $post]);
});

Route::get('/authors/{user:username}', function(User $user){

    // $post = Post::find($slug);    
    return view('posts',['title' => count($user->posts). 'Artikel by ' . $user->name, 'posts' => $user->posts]);
});
Route::get('siswa', function(){
    return view('siswa', ['title'=>'List Siswa']);
});

Route::get('menu', function(){
    return view('menu', ['title'=>'Menu Siswa']);
});

Route::get('rekap',function(){
    return view('rekap',['title'=>'Rekap']);
});