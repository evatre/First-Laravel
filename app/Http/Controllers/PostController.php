<?php

namespace App\Http\Controllers;


use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        $post = Post::get();
        dd($post);
    }
}
