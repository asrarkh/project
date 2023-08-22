<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reqjob;
use App\Models\ListJob;

class ReqjobController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('index', [
      'Reqjob' => Reqjob::all()
      ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jobs = ListJob::where('is_active',true)->get();
        // dd($jobs);
        return view('create',['jobs'=>$jobs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)   //post
    {

        $reqjob = new Reqjob();
        $reqjob->name = $request->input('name');
        $reqjob->major = $request->input('major');
        $reqjob->list_job_id = $request->input('list_job_id');

        if($request->file('cv')){
            $fileName = time().'_'.$request->file('cv')->getClientOriginalName();
            $filePath = $request->file('cv')->storeAs('cv', $fileName, 'public');
            $reqjob->cv = '/storage/' . $filePath;
        }

        $reqjob->phone = $request->input('phone');
        $reqjob->save();
        return redirect()->route('reqjob.index');
    }

}
