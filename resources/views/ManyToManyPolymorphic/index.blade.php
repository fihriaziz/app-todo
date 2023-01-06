@extends('layouts.app')
@section('title', 'Relation many to many polymorphic')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">Title</th>
                            <th class="text-center">Body</th>
                            <th class="text-center">Tag</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->body }}</td>
                                <td>
                                    @foreach ($post->tags as $tag)
                                        <ul>
                                            <li>{{ $tag->name }}</li>
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
