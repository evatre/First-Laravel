<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): View 
    { 
        return view('posts.index', [
            'posts' => Post::get(),
        ]);
       
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        //dd($validated);         
        $post = new Post([
            'title' => $validatedData['title'],
            'body' => $validatedData['body'],
        ]);
        
        //$post->title = $requestData['title'];
        //$post->body = $requestData['body'];
        $post->save();

        return redirect()->route('posts.show', ['post' => $post]);
    }

    public function show(Post $post): View
    {
        return view('posts.show', [
            'post' => $post,
        ]);
    }

    public function edit(Post $post): View 
    {
        return view('posts.edit', [
            'post' => $post,
        ]);
    }

    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required |max:255',
            'body' => 'required',
        ]); 

        $post->title = $validated['title'];
        $post->body =  $validated['body']; 
        
        $post->save();

        return redirect()->route('posts.show', ['post' => $post]);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }

}
