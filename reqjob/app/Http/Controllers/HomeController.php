<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListJob;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }


    public function createJob()
    {
        return view('create-job');
    }

    public function storeJob(Request $request)
    {
        $job = new ListJob();
        $job->name = $request->name;
        $job->is_active = $request->is_active;
        $job->save();
        return redirect('/create-job');
    }
}
