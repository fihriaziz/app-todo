@extends('layouts.app')
@section('title', 'Eloquent Relationships : Relasi One to One & Many To Many')
@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <h5 class="text-center my-4">Laravel Eloquent Relationship : One To One & Many To Many</h5>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Nama User</th>
                        <th>Nomor Telepon</th>
                        <th>Roles</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->phone->no_telp }}</td>
                        <td>
                            @foreach ($user->roles as $role)
                                <button class="btn btn-sm btn-primary me-2">{{ $role->name }}</button>
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
