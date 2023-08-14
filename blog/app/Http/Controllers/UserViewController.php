<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Models\Project;

class UserViewController extends Controller
{
    public function index(){
        $users = DB::select('select * from projects');
        return view('user-view',['users'=>$users]);
        }
}
