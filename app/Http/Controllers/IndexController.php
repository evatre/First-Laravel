<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return view('index', [
            'posts' => Post::get(),
        ]);
    }

    public function show(Post $post)
    {
        return view('show', [
            'post' => $post,
        ]);
    }
}
