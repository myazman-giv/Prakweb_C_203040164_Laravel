<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Mochamad Yazman Yazman",
        "email" => "myazman9b@gmail.com",
        "image" => "resize.jpg"
    ]);
});





Route::get('/blog', function () {
    $blog_post = [
        [
            "title" => "Post Pertama",
            "slug" => "Judul-post-pertama",
            "author" => "Mochamad Yazman Yazid",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. A eum pariatur quidem! Ea, 
            corrupti rerum. Quasi incidunt, nihil, mollitia eos soluta tempora, et esse ratione cupiditate 
            ut ipsa cum tenetur modi harum numquam nesciunt doloribus optio distinctio cumque deserunt. 
            Necessitatibus voluptates nulla reprehenderit nihil quo voluptatibus omnis tempore ad officiis 
            est iste facere, ex alias, vero explicabo quia eius? Laboriosam aperiam laudantium vitae quae 
            quasi fugit voluptas est explicabo cupiditate eum ducimus, recusandae facere placeat qui odit 
            ab maxime deleniti excepturi tempora ratione autem impedit? Deleniti voluptate totam minima 
            molestias, cupiditate cum id accusantium possimus? Quae possimus iste saepe nisi."
        ],
        [
            "title" => "Post Kedua",
            "slug" => "Judul-post-kedua",
            "author" => "Walter Samuel",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. A eum pariatur quidem! Ea, 
            corrupti rerum. Quasi incidunt, nihil, mollitia eos soluta tempora, et esse ratione cupiditate 
            ut ipsa cum tenetur modi harum numquam nesciunt doloribus optio distinctio cumque deserunt. 
            Necessitatibus voluptates nulla reprehenderit nihil quo voluptatibus omnis tempore ad officiis 
            est iste facere, ex alias, vero explicabo quia eius? Laboriosam aperiam laudantium vitae quae 
            quasi fugit voluptas est explicabo cupiditate eum ducimus, recusandae facere placeat qui odit 
            ab maxime deleniti excepturi tempora ratione autem impedit? Deleniti voluptate totam minima 
            molestias, cupiditate cum id accusantium possimus? Quae possimus iste saepe nisi."
        ]
    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_post
    ]);
});


// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_post = [
        [
            "title" => "Post Pertama",
            "slug" => "Judul-post-pertama",
            "author" => "Mochamad Yazman Yazid",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. A eum pariatur quidem! Ea, 
            corrupti rerum. Quasi incidunt, nihil, mollitia eos soluta tempora, et esse ratione cupiditate 
            ut ipsa cum tenetur modi harum numquam nesciunt doloribus optio distinctio cumque deserunt. 
            Necessitatibus voluptates nulla reprehenderit nihil quo voluptatibus omnis tempore ad officiis 
            est iste facere, ex alias, vero explicabo quia eius? Laboriosam aperiam laudantium vitae quae 
            quasi fugit voluptas est explicabo cupiditate eum ducimus, recusandae facere placeat qui odit 
            ab maxime deleniti excepturi tempora ratione autem impedit? Deleniti voluptate totam minima 
            molestias, cupiditate cum id accusantium possimus? Quae possimus iste saepe nisi."
        ],
        [
            "title" => "Post Kedua",
            "slug" => "Judul-post-kedua",
            "author" => "Walter Samuel",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. A eum pariatur quidem! Ea, 
            corrupti rerum. Quasi incidunt, nihil, mollitia eos soluta tempora, et esse ratione cupiditate 
            ut ipsa cum tenetur modi harum numquam nesciunt doloribus optio distinctio cumque deserunt. 
            Necessitatibus voluptates nulla reprehenderit nihil quo voluptatibus omnis tempore ad officiis 
            est iste facere, ex alias, vero explicabo quia eius? Laboriosam aperiam laudantium vitae quae 
            quasi fugit voluptas est explicabo cupiditate eum ducimus, recusandae facere placeat qui odit 
            ab maxime deleniti excepturi tempora ratione autem impedit? Deleniti voluptate totam minima 
            molestias, cupiditate cum id accusantium possimus? Quae possimus iste saepe nisi."
        ]
    ];


    $new_post = [];
    foreach ($blog_post as $post) {
        if ($post["slug"] === $slug) {
            $new_post  = $post;
        }
    }
    return view('post', [
        "title" => "single Post",
        "post" => $new_post
    ]);
});
