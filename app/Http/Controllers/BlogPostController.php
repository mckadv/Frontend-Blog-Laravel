<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    /**
     * Display all post.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // fetch all blog posts from DB
		$posts = BlogPost::all();
		return view('layouts.index', [
           'posts' => $posts,
        ]); //returns the view with posts
    }
}
