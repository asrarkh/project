<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('manager.jobs.index')->with('jobs',Job::get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('manager.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
        ]);

        $job = new Job();
        $job->name = $request->name;
        $job->is_active = $request->is_active;
        $job->save();

        return redirect('/manager/jobs')->with('success','Job Added Successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('manager.jobs.edit')->with('job',$job);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'name'=>'required'
        ]);
        $job->name = $request->name;
        $job->is_active = $request->is_active;
        $job->save();

        return redirect('/manager/jobs')->with('success','Job Updated Successfuly');
    }

}
