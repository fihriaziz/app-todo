<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class ManyToManyPolymorphicController extends Controller
{
    public function index()
    {
        $posts = Post::with('tags')->get();
        // dd($posts);
        return view('ManyToManyPolymorphic.index', compact('posts'));
    }

    public function create()
    {
        return view('ManyToManyPolymorphic.craete');
    }

    public function store(Request $req)
    {
        $post = Post::find(3);
        $tag = new Tag();
        $tag->name = $req->name;
        $post->tags()->save($tag);
        return 'Save';
    }
}
