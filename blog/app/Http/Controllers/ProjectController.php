<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('index', [
      'projects' =>project::getdata()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)   //post
    {
        $project = new Project();
        $project->name = $request->input('name');
        $project->major = $request->input('major');
        $project->job = $request->input('job');
        $project->cv = $request->input('cv');
        $project->phone = $request->input('phone');
        $project->save();
        return redirect()->route('project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($projects) // can read from DB , write like = news/{id} 
    {
        $project= project::findOrFail($projectid); //This will fetch the respective record from the table. 
        return view('details',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
