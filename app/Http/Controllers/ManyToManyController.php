<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class ManyToManyController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->get();
        // dd($users);
        return view('manyToMany.index', compact('users'));
    }

    public function create()
    {
        return view('manyToMany.create');
    }

    public function store(Request $req)
    {
        $user = User::find($req->user);
        $roleIds = [1,2];
        $user->roles()->attach($roleIds);

        // create record in table role
        $role = Role::find($req->role);
        $userIds = [1,2];
        $role->users()->sync($userIds);
    }

}
