<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
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
            "title" => "Post Iteer",
            "slug" => "Judul-post-kedua",
            "author" => "Walter Samuel",
            "body" => "<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A eum pariatur quidem! Ea, 
            corrupti rerum. Quasi incidunt, nihil, mollitia eos soluta tempora, et esse ratione cupiditate 
            ut ipsa cum tenetur modi harum numquam nesciunt doloribus optio distinctio cumque deserunt. 
            Necessitatibus voluptates nulla reprehenderit nihil quo voluptatibus omnis tempore ad officiis 
            est iste facere, ex alias, vero explicabo quia eius? Laboriosam aperiam laudantium vitae quae 
            quasi fugit voluptas est explicabo cupiditate eum ducimus, recusandae facere placeat qui odit 
            ab maxime deleniti excepturi tempora ratione autem impedit? kedua.</p><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. A eum pariatur quidem! Ea, 
            corrupti rerum. Quasi incidunt, nihil, mollitia eos soluta tempora, et esse ratione cupiditate 
            ut ipsa cum tenetur modi harum numquam nesciunt doloribus optio distinctio cumque deserunt. 
            Necessitatibus voluptates nulla reprehenderit nihil quo voluptatibus omnis tempore ad officiis 
            est iste facere, ex alias, vero explicabo quia eius? Laboriosam aperiam laudantium vitae quae 
            quasi fugit voluptas est explicabo cupiditate eum ducimus, recusandae facere placeat qui odit 
            ab maxime deleniti excepturi tempora ratione autem impedit? kedua.</p>"
        ]
    ];


    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
