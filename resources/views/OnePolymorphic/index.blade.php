@extends('layouts.app')
@section('title', 'Relation one to one polymorphic')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <table class="table table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Post</th>
                            <th>Body</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{ $post->image->imageable->id }}</td>
                            <td> {{$post->title}} </td>
                            <td>{{ $post->image?->body }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
