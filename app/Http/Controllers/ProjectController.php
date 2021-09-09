<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Project;

class ProjectController extends Controller
{
    public function index() {

        $projects = Project::all();
        return view('welcome', ['projects' => $projects]);
    }

    public function create() {
        return view('projects.create');
    }
}
