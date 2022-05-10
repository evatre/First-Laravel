<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
    public function index()
    {
        //dd(1);
        return view('page', ['name' => 'Eva']);
    }
}