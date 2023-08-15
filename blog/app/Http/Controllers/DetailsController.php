<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class DetailsController extends Controller
{

        public function index()
        {
          
        }
      
        /**
         * Show the form for creating a new resource.
         *
         *
         */
        public function create()
        {
            //
        }
    
        /**
         * Store a newly created resource in storage.
         *
         */
        public function store(Request $request)
        {
            //
        }
    
        /**
         * Display the specified resource.
         *
         * 
         */
        public function show( $id)
        {
            $project = Project::find($id);
            return view('details' ,['project'=>$project]);
            // dd($project);
                   
        }

        public function approve_req($id)
        {
            Project::where('id',$id)->update([
                'status'=>'approved'
            ]);
            return redirect('/details/'.$id);
        
        }

        
        public function reject_req($id)
        {
            Project::where('id',$id)->update([
                'status'=>'rejected'
            ]);
            return redirect('/details/'.$id);
        
        }

        public function approved_reqs()
        {
            $projects = Project::where('status','approved')->get();
            return view('list-reqs')->with('projects',$projects);
        }
    
        public function rejected_reqs()
        {
            $projects = Project::where('status','rejected')->get();
            return view('list-reqs')->with('projects',$projects);
        }
    
    
        
        /**
         * Show the form for editing the specified resource.
         *
         */
        public function edit($id)
        {
            //
        }
    
        /**
         * Update the specified resource in storage.
         *
         * 
         */
        public function update(Request $request, $id)
        {
            //
        }
    
        /**
         * Remove the specified resource from storage.
         *
         *
         */
        public function destroy($id)
        {
            //
        }
    }
