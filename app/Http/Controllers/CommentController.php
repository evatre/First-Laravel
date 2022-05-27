<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CommentController extends Controller
{
    public function index(): View 
    { 
        return view('comments.index', [
            'comments' => Comment::get(),
        ]);
       
    }

    public function create(): View
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        $requestData = $request->All();
        //$validated = $request->validate([
          //  'title' => 'required',
            //'body' => 'required',
        //]);

        $comment = new Comment([
            'title' => $requestData['title'],
            'body' => $requestData['body'],
        ]);
        
        $comment->save();

        return redirect()->route('comments.show', ['comment' => $comment]);
    }

    public function show(Comment $comment): View
    {
        return view('comments.show', [
            'comment' => $comment,
        ]);
    }

    public function edit(Comment $comment): View
    {
        return view('comments.edit', [
            'comment' => $comment,
        ]);
    }

    public function update(Request $request, Comment $comment)
    {
        $requestData = $request->all();

        $comment->title = $requestData['title'];
        $comment->body =  $requestData['body']; 
        
        $comment->save();

        return redirect()->route('comments.show', ['comment' => $comment]);
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comments.index', ['comment' => $comment]);
    }
}

