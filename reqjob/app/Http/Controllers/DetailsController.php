<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reqjob;

class DetailsController extends Controller
{
    public function show( $id)
    {
        $reqjob = Reqjob::find($id);
        return view('details' ,['reqjob'=>$reqjob]);
        // dd($project);
               
    }

    public function approve_req($id)
    {
        Reqjob::where('id',$id)->update([
            'status'=>'approved'
        ]);
        return redirect('/details/'.$id);
    
    }

    
    public function reject_req($id)
    {
        Reqjob::where('id',$id)->update([
            'status'=>'rejected'
        ]);
        return redirect('/details/'.$id);
    
    }

    public function approved_reqs()
    {
        $reqjob = Reqjob::where('status','approved')->get();
        return view('list-reqs')->with('Reqjobs',$reqjob);
    }

    public function rejected_reqs()
    {
        $reqjob = Reqjob::where('status','rejected')->get();
        return view('list-reqs')->with('Reqjobs',$reqjob);
    }


}
