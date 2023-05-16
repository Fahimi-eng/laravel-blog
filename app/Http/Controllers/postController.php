<?php

namespace App\Http\Controllers;

use App\Http\Middleware\ValidateSignature;
use App\Http\Requests\postRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class postController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts',[
            'posts' => $posts
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('create',[
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
//        Validator::make(\request()->all(),[
//            'cover' => 'mimes:jpeg,jpg,png,gif|required',
//            'title' => 'required|max:255',
//            'category' => 'required',
//            'summary' => 'required'
//        ])->validate();

//        $validator = Validator::make(\request()->all(),[
//            'cover' => 'mimes:jpeg,jpg,png,gif|required',
//            'title' => 'required|max:255',
//            'category' => 'required',
//            'summary' => 'required'
//        ]);
//        if($validator->fails()){
//            return redirect()->back()->withErrors($validator);
//        }
        $cover = $request->file('cover')->store('public/post');
        Post::create([
            'title' => \request('title'),
            'summary' => \request('summary'),
            'cover' => $cover,
            'body' => \request('body'),
            'category_id' => \request('category')
        ]);
        return redirect()->route('manage.posts');
    }

    public function show()
    {
        $id = \request()->query('id');
        $post = Post::query()->where('id',$id)->with('category')->first();
        return view('post',[
            'post' => $post
        ]);
    }

    public function edit($id)
    {
        $categories = Category::all();
        $post = Post::query()->where('id', $id)->first();
        return view('edit',[
            'post' => $post,
            'categories' => $categories
        ]);
    }

    public function delete(Request $request,Post $post)
    {
        $post->delete();
        return view('posts');
    }

    public function update(Request $request, Post $post)
    {
        if (empty(\request('cover')))
        {
            $cover = $post->cover;
        }
        else
        {
            Storage::delete($post->cover);
            $cover = $request->file('cover')->store('public/post');
        }

        $post->update([
            'title' => \request('title'),
            'summary' => \request('summary'),
            'cover' => $cover,
            'body' => \request('body'),
            'category_id' => \request('category')
        ]);
        return redirect()->route('manage.posts');
    }
}
