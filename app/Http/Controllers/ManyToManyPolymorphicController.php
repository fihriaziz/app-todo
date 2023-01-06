<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ManyToManyPolymorphicController extends Controller
{
    public function index()
    {
        $posts = Post::with('tags')->get();
        // dd($posts);
        return view('ManyToManyPolymorphic.index', compact('posts'));
    }
}
