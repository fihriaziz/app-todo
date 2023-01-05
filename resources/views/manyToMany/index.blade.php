@extends('layouts.app')
@section('title','Relation Many to Many')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <table class="table table-striped table-bordered">
                    @foreach ($users as $user)
                        <tbody>
                            <tr>
                                <td>Name : {{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>
                                    @foreach ($user->roles as $role)
                                        <ul>
                                            <li>{{ $role->name }}</li>
                                        </ul>
                                    @endforeach
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
