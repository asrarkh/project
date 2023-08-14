<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function index(){

        return view('home.index');
    }

    public function show(string $users){

        return view('user-view');
    }

   
}
