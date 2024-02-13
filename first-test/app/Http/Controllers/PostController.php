<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function  index() {
        $posts = [
            [
                "name" => "Post A",
                "content" => "Content for Post A",
            ],
            [
                "name" => "Post B",
                "content" => "Content for Post B",
            ],
            [
                "name" => "Post C",
                "content" => "Content for Post C",
            ],
            [
                "name" => "Post D",
                "content" => "Content for Post D",
            ],
            [
                "name" => "Post E",
                "content" => "Content for Post E",
            ],
        ];

        return view('posts-list', [
            "posts" => $posts
        ]);
    }
}
