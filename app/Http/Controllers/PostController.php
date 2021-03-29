<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class PostController extends Controller
{
    
    public function home()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }

    public function dashboard()
    {
        $posts = Post::all();
        return view('dashboard', compact('posts'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->published_at = $request->published_at;

        $post->save();
        return redirect('/dashboard')->with('success', 'Post created successfully !');
    }

    public function show(Post $post)
    {
        return view('post', compact('post'));
    }

    public function edit(Post $post)
    {
        return view('admin.edit', compact('post'));
    }

    public function update(Post $post, Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post->title = $request->title;
        $post->body = $request->body;
        $post->published_at = $request->published_at;

        $post->save();
        return redirect('/dashboard')->with('success', 'Post update successfully !');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/dashboard')->with('success', 'Post deleted successfully !');
    }  
}