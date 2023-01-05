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
                        @foreach ($comments as $comment)
                        <tr>
                                <td> {{ $comment->commentable->body }}
                                    <ul>
                                        <li>{{ $comment->commentable?->title}}</li>
                                    </ul>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
