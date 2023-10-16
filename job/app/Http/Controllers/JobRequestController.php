<?php

namespace App\Http\Controllers;

use App\Models\JobRequest;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Http\Requests\StoreJobRequestRequest;
use App\Http\Requests\UpdateJobRequestRequest;

class JobRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobrequests = JobRequest::all();

        return view('manager.jobs-requests.index',['jobrequests'=>$jobrequests]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /**if(\Auth::user()->isAdmin){
            $jobReqsCount = JobRequest::count();
            return view('dashboard',['jobReqsCount'=>$jobReqsCount]);
        }*/
        $jobs = Job::where('is_active',true)->get();
        return view('apply-job',['jobs'=>$jobs]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string',
            'phone'=>'required|numeric',
            'job_id'=>'required',
            'major'=>'required',
            'cv'=>'required|file',
        ]);
       /* $userid = \Auth::user()->id;*/
        $jobReq = new JobRequest();
        $jobReq->name = $request->name;
        $jobReq->phone = $request->phone;
        $jobReq->job_id = $request->job_id;
        $jobReq->major = $request->major;


        if($request->file('cv')){
            $fileName = time().'_'.$request->file('cv')->getClientOriginalName();
            $filePath = $request->file('cv')->storeAs('cv', $fileName, 'public');
            $jobReq->cv = '/storage/' . $filePath;
        }

        $jobReq->save();

        return redirect('/dashboard')->with('success','Your Request Uploaded Successfuly');

    }

    /**
     * Display the specified resource.
     */
    public function show(JobRequest $jobRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JobRequest $jobRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequestRequest $request, JobRequest $jobRequest)
    {
        //
    }

    public function approve($id)
    {
        $req = JobRequest::find($id);
        $req->status = 'Approved';
        $req->save();
        return redirect('/manager/jobs-requests')->with('success','Request Approved Successfuly');
    }
    public function reject($id)
    {
        $req = JobRequest::find($id);
        $req->status = 'Rejected';
        $req->save();
        return redirect('/manager/jobs-requests')->with('success','Request Rejected Successfuly');
    }
}
