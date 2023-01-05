@extends('layouts.app')
@section('title','Create relation one polymorphic')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create Data</div>
                    <div class="card-body">
                        <form action="{{ url('create') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="title">Title: </label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="body">Body: </label>
                                <input type="text" name="body" id="body" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
