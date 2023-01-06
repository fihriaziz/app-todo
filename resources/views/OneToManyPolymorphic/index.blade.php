@extends('layouts.app')
@section('title','Relation one to many polymorphic')
@section('content')
    <div class="container">
        <div class="row  justify-content-center">
            <div class="col-md-12">
                <table class="table table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td> {{ $post->title }}
                                @foreach ($post->comments as $comment)
                                    <ul>
                                        <li>{{ $comment->body }}</li>
                                    </ul>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
