<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        return view('posts', [
            'posts' => Post::latest()->filter(request(['search']))->get(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post)  //Post::where('slug', $post)->firstOrFail()
    {
        // find a post by its slug and pass it to a view called 'post'
        return view('post', [
            'post' => $post
        ]);
    }
}
