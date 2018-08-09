<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;
use Auth;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
      /* If there is a query for a certain date
       / fetch posts, otherwise fetch all Posts
      */
      if (request(['month', 'year'])) {
        $posts = Post::latest()
          ->filter(request(['month', 'year']))
          ->get();
      } else {
        $posts = Post::latest()->get();
      }

      return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
      return view('posts.show', compact('post'));
    }

    public function create()
    {
      return view('posts.create');
    }

    public function store()
    {
      $this->validate(request(), [
        'title' => 'required',
        'body' => 'required'
      ]);

      auth()->user()->publish(
        new Post(request(['title', 'body']))
      );

      return redirect('/');
    }

    public function delete(Post $post)
    {
      if (Auth::check()) {
        $user = Auth::user();
        if ($post->user == $user) {
          $post->delete();
        }
      }

      return back();
    }

    public function edit(Post $post)
    {
      if (Auth::check()) {
        $user = Auth::user();
        if ($user == $post->user) {
          return view('admin.show', compact('post'));
        }
      }
    }

    public function update(Post $post, Request $request)
    {
      $this->validate(request(), [
        'title' => 'required',
        'body' => 'required'
      ]);

      if (Auth::check()) {
        $user = Auth::user();
        if ($user == $post->user) {
          $post->update($request->all());
        }
      }

      $posts = Post::latest()->where("posts.user_id", "=", $user->id)->get();

      return view('admin.index', compact('posts'));
    }
}
