<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {
    public function index() {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function store(Request $request) {
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
