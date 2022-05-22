<?php

namespace App\Http\Controllers;

use App\Models\Comment;

class CommentController extends Controller
{
    public function index() {
        $comment = Comment::get();
        dd($comment);
    }
}

