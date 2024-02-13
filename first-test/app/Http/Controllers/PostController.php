<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function  index() {

        // Post::create([
        //     "name" => "Post A",
        //     "content" => "Content for Post A",
        // ]);
        // Post::create([
        //     "name" => "Post B",
        //     "content" => "Content for Post B",
        // ]);
        // Post::create([
        //     "name" => "Post C",
        //     "content" => "Content for Post C",
        // ]);
        // Post::create([
        //     "name" => "Post D",
        //     "content" => "Content for Post D",
        // ]);

        $posts = Post::all();

        return view('posts-list', [
            "posts" => $posts
        ]);
    }
}
