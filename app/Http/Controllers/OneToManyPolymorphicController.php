<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class OneToManyPolymorphicController extends Controller
{
    public function index()
    {
        $comments = Comment::with('commentable')->get();

        return view('OneToManyPolymorphic.index', compact('comments'));
    }

    public function create_post()
    {
        return view('OneToManyPolymorphic.create_post');
    }

    public function save(Request $req)
    {
        $post = Post::create([
            'title' => $req->title,
            'body' => $req->body
        ]);

        $comment = new Comment();
        $comment->body = $post->body;
        $post->comments()->save($comment);
        return 'OK';
    }
}
