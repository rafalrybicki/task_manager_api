<?php

namespace App\Http\Controllers;

use App\Folder;
use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function index()
    {
        return response(Folder::with('projects')->get());
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, Folder $folder)
    {
        //
    }

    public function destroy(Folder $folder)
    {
        //
    }
}
