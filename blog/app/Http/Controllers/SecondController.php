<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SecondController extends Controller
{
    //
    public function ShowString(){

        return 'akk';
    }
    // view in controller  
    public function WelcomeView(){
    
        return view(view :'welcomee');
    }

    public function WelcomeeView(){

        $obj= new \stdClass();

        $obj -> name = 'asrar';
        $obj -> id = 5;
        $obj -> gender = 'famle';
        return view(view:'welcome')-> with(compact('obj'))/*this syntax for view data from controller*/;
}
}