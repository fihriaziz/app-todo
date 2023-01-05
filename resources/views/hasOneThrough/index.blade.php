@extends('layouts.app')
@section('title','Relation hasone through')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Mechanic</th>
                            <th>Owner</th>
                            <th>Car</th>
                        </tr>
                    </thead>
                    @foreach ($mechanics as $mechanic)
                        <tbody>
                            <tr>
                                <td>{{ $mechanic->name }}</td>
                                <td>{{ $mechanic->carOwner->name }}</td>
                                <td>{{ $mechanic->carOwner->car->model }}</td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
@endsection
