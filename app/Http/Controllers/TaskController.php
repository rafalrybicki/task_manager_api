<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return response(Task::all());
    }

    public function store(Request $request)
    {
    }


    public function show(Request $request)
    {
        $id = $request->task;
        return response(Task::with('subtasks')->find($id));
    }

    public function update(Request $request, Task $task)
    {
        //
    }

    public function destroy(Task $task)
    {
        //
    }
}
