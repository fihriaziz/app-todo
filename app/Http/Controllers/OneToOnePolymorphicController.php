<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Post;
use Illuminate\Http\Request;

class OneToOnePolymorphicController extends Controller
{
    public function index()
    {
        $images = Image::with('imageable')->get();
        // dd($posts);
        return view('OnePolymorphic.index', compact('images'));
    }

    public function create()
    {
        return view('OnePolymorphic.create');
    }

    public function store(Request $req)
    {
        $post = Post::create([
            'title' => $req->title,
            'body' => $req->body
        ]);

        $post->image()->create([
            'body' => $req->body
        ]);
    }
}
