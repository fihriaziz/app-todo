<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Project;
use Illuminate\Http\Request;

class ManyController extends Controller
{
    public function index()
    {

        // $countries = Country::with(['cities'])->get();
        $projects = Project::with('deployments')->get();
        // dd($projects);

        return view('hasManyThrough.index', compact('projects'));
    }
}
