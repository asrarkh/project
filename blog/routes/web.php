<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
   
  



    
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');
        

        
    });
     
    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

        Route::get('view-records','UserViewController@index')->name('view-rec');
        Route::get('/details/{id}',"DetailsController@show");
    
        Route::get('/details/{id}/approve',"DetailsController@approve_req");
        Route::get('/details/{id}/reject',"DetailsController@reject_req");
    
        Route::get('/records/approved',"DetailsController@approved_reqs");
        Route::get('/records/rejected',"DetailsController@rejected_reqs");
    
    });
});







Route::get('create', function () {
    return view('create');
});

Route::resource('project','App\Http\Controllers\ProjectController'); 

Route::get('submit', function () {
    return view('submit');
});

Route::get('job', function () {
    return view('job');
});


Route::get('fff', function () {
    return view('about');
});
//call view from route 
Route::get('welcome', function () {
    $data=[];
    $data['name']= 'asrar';
    $data['id']='1111';
    return view('welcome',$data)/*this syntax for view data from rout*/;
});

Route::get('index/{id?}', function () {
    return "user id:";
})->name('a'); 



//prefix 
route::prefix('admin/post')->group(function(){

    route::get('active', function(){
        return 'wlcome admin';
    });

    route::get('name', function(){
    return 'wlcome admin name';
    });
});


//middleware is an authentication for page of the web 
Route::group(['prefix' => 'user','middleware' => 'auth'],function(){
    Route::get('fff',function(){
        return 'work';
    });
});
/*//for middleware tset
Route::get('login',function(){
    return 'must be login to access this page';
})->name('login');
*/

// namespace 
/* Route::namespace('Front')->group(function(){
       // all route only access controller  in folder name Front 
       Route::get('users','App\Http\Controllers\Front\FirstController@admin');
}); */

Route::group(['namespace' => 'Front'], function(){
    Route::get('admiin','FirstController@admin');
    Route::get('admiin1','FirstController@admin1'); 
});
Route::get('admiin2','App\Http\Controllers\Front\FirstController@admin');
route::get('second','App\Http\Controllers\SecondController@ShowString');
// using 'any' method or use match method -> Route::match(['get', 'post'], '/', function () ....
Route::any('foo', function () {
    return 'Hello World';
});
// resource "CRUD"
Route::resource('news','App\Http\Controllers\NewsController');

//call view from controller 
route::get('view','App\Http\Controllers\SecondController@WelcomeView');
route::get('viiwe','App\Http\Controllers\SecondController@WelcomeeView');
