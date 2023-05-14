<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        $categories = Category::all();
        return view('index',[
            'posts' => $posts,
            'categories' => $categories
        ]);
    }
}
