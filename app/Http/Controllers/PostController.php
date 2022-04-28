<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class PostController extends Controller
{
    // Restful actions: try to limit controllers to these:
    // index, show, create, store, edit, update, destroy

    public function index()
    {
        return view('posts.index', [
            'posts' => Post::latest()->filter(
                    request(['search', 'category', 'author'])
                )->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post)
    {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
