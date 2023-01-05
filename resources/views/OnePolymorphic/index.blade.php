@extends('layouts.app')
@section('title', 'Relation one to one polymorphic')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <table class="table table-stripped table-bordered">
                    <thead>
                        <tr>
                            <th>Post</th>
                            <th>Body</th>
                            <th>User</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($images as $image)
                            <tr>
                                <td>{{ $image->imageable->title }}</td>
                                <td>{{ $image->imageable->body }} </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
