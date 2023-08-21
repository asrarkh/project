<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reqjob;

class ReqjobController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
      return view('index', [
      'Reqjob' =>Reqjob::all()
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
        
        $reqjob = new Reqjob();
        $reqjob->name = $request->input('name');
        $reqjob->major = $request->input('major');
        $reqjob->job = $request->input('job');
        $reqjob->cv = $request->input('cv');
        $reqjob->phone = $request->input('phone');
        $reqjob->save();
        return redirect()->route('reqjob.index');
    }
    
    public function viewFile()
    {
        $file_extension = $request->cv->getClientOriginalExtension();
        $filename = time().$file_extension;
        $path = 'files';
        $request->cv->move($path,$filename);
        return 'ok';
    }
}
