<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(Post $post)
    {
        // Query sort by created_date
        $posts = [];
        $posts = $post::latest()->get();

        // Bind query result to view
        return view('post.index')->with(['posts' => $posts]);
    }


    public function show(Post $post)
    {
        return view('post.show')->with(['posts' => $post]);
    }

}
