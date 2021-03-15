<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        
        return view('posts.index', [
            'posts' => $posts,
        ]);
    }

    public function show($post)
    {
        $post = Post::find($post);

        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function create()
    {
        return view('posts.create',['users' => User::all()]);
    }

    public function store()
    {
        $data =request()->all();
     
       
        Post::create([
          
            'name' => $data['title'],
            'descripton' => $data['desc'],
            'postedby' => $data['postname']
           
           
        ]);
        
        return redirect()->route('posts.index');
    }
    public function edit($post)
    {
        $post = ['id' => 1, 'title' => 'Laravel', 'descripton' => 'Show Post Description', 'posted_by' => 'Ahmed', 'created_at' => '2021-03-13'];

        return view('posts.edit', [
            'post' => $post
        ]);
        
    }
    public function update()
    {
        

        return redirect()->route('posts.index');
    }
}
