<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::all();
        $comments = Post::find(1)->comments;
        return view('posts',['posts' => $posts,'comments'=>$comments]);
    }

    // public function showpost()
    // {
        
    // }
}
