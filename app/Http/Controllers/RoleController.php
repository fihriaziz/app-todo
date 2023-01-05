<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $users = User::with(['phone','roles'])->get();
        return view('user.user', compact('users'));
    }
}
