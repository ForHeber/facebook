<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\PostForm;

class PostController extends Controller
{
      public function index()
      {
      	return view("posts.index")->with('posts', \App\Post::paginate(5)->setPath('post'));
      }

      public function create()
      {
          return view("posts.createUpdate");
      }

    public function store(PostForm $postForm)
    {
    	$post = new \App\Post;

    	$post->title = \Request::input('title');

    	$post->body = \Request::input('body');

    	$post->save();

    	return redirect('post')->with('message', 'Post saved');
    }

    public function edit($id)
    {
    	return view('posts.createUpdate')->with('post', \App\Post::find($id));
    }

    public function update($id, PostForm $postForm)
    {
    	$post = \App\Post::find($id);

    	$post->title = \Request::input('title');

    	$post->body = \Request::input('body');

    	$post->save();

    	return redirect('post')->with('message', 'Post actualizado');
    }

    public function destroy($id)
    {
    	$post = \App\Post::find($id);

    	$post->delete();

    	return redirect()->route('post.index')->with('message', 'Post deleted');
    }

}
