<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
{
  
    //controller middleware applied to all the methods except admin mesthod 
    // if  we want apply all method will be remove this syntax "except(methods:'admin')" 
     public function __construct(){
     $this -> middleware(middleware: 'auth')-> except(methods:'admin');
    }
    public function admin(){
        return 'test admin';

    }
    public function admin1(){
        return 'test admin1';

    }
    public function admin2(){
        return 'test admin2';

    }
    
};
