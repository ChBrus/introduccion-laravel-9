<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function blog()
    {
        # Get all posts
        // $posts = Post::get();

        # Get first post
        // $post = Post::first();

        # Find post by id
        // $post = Post::find(25);

        // dd($post);

        $posts = Post::oldest('id')->paginate(
            pageName: 'blog'
        );

        return view('blog', [
            'posts' => $posts,
            'elements' => $posts->getUrlRange(1, $posts->lastPage()),
            'currentPage' => $posts->currentPage(),
        ]);
    }

    public function post(Post $post)
    {
        return view('post', [
            'post' => $post,
        ]);
    }
}
