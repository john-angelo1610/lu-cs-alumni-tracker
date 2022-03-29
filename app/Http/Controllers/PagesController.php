<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller {
    public function index() {
        $posts = Post::all();

        return view('index', compact('posts'));
    }

    public function show($id) {
        $post = Post::FindOrFail($id);
        return view('post', compact('post'));
    }
}
