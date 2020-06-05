<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Post;

class BlogController extends Controller
{
    
    public function index(Post $post)
    {
        $categoryWidget = Category::all();
        $data = $post->latest()->take(8)->get();
        return view('pages.home.index', compact('categoryWidget', 'data'));
    }

    public function contentBlog($slug)
    {
        $categoryWidget = Category::all();
        $data = Post::where('slug', $slug)->get();
        return view('pages.home.content', compact('categoryWidget', 'data'));
    }

}
