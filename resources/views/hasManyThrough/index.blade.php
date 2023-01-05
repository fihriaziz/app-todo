@extends('layouts.app')
@section('title','Relation hasMany through')
@section('content')
    <div class="container">
        <div class="row">
            <h3> Has many Through</h3>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Env</th>
                    </tr>
                </thead>
                @foreach ($projects as $project)
                    <tbody>
                        <tr>
                            <td>{{ $project->name }}</td>
                            <td>
                                @foreach ($project->deployments as $deploy)
                                    <ul>
                                        <li>{{$deploy->environment->name}}</li>
                                    </ul>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection
