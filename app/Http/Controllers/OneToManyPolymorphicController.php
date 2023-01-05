<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use App\Models\Video;
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

    public function create_video()
    {
        return view('OneToManyPolymorphic.create_video');
    }

    public function store(Request $req)
    {
        $video = Video::create([
            'title' => $req->title,
            'url' => $req->url
        ]);

        $comment = new Comment();
        $comment->body = $video->title;
        $video->comments()->save($comment);
        return 'OK';
    }
}
