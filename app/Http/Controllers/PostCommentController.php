<?php

namespace App\Http\Controllers;

use App\Models\postcomment;
use Illuminate\Http\Request;

class PostCommentController extends Controller
{
    public function store(Request $request)
    {
        
         $validatedData = $request->validate([
            'author' => 'string|required',
            'body' => 'required|max:255',
            'commentable_id' => 'required',
            'commentable_type' => 'required',
         ]);

         $postcomment = new postcomment([
            'author' => $validatedData['author'],
            'body' => $validatedData['body'],
            'commentable_id' => $validatedData['commentable_id'],
            'commentable_type' => $validatedData['commentable_type'],
         ]);

         $postcomment->save();

         return redirect()-> back();
    }
}
