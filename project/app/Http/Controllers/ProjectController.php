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
      'projects' =>project::all()
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
    
    /* public function viewFile()
    {
        $file_extension = $request->cv->getClientOriginalExtension();
        $filename = time().$file_extension;
        $path = 'files';
        $request->cv->move($path,$filename);
        return 'ok';
    }*/

}
