<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        // return response(Project::all());
        // return response(Project::withCount(['tasks', 'overdueTasks'])->groupBy('folder')->get());
    }

    public function show(Request $request)
    {
        $id = $request->project;
        return response(Project::withCount(['tasks', 'overdueTasks'])->find($id));
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, Project $project)
    {
        //
    }

    public function destroy(Project $project)
    {
        //
    }
}
