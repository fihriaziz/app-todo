<?php

namespace App\Http\Controllers;

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
}
