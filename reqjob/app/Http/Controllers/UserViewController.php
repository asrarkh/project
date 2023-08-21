<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Models\Reqjob;

class UserViewController extends Controller
{
    public function index(){
        $users = DB::select('select * from Reqjobs');
        return view('user-view',['users'=>$users]);
        }
}
