<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
    public function __construct() {
        $this->middleware(['auth', 'isAdmin']);
    }

    public function index() {
        $posts = Post::all()->sortByDesc('date');
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request) {
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);
        return redirect('/posts');
    }

    public function edit($id) {
        $post = Post::FindOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post) {
        request()->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $post->update([
            'title' => request('title'),
            'content' => request('content')
        ]);
        return redirect('/posts');
    }

    public function destroy(Post $post) {
        $post->delete();
        return redirect('/posts');
    }
}
