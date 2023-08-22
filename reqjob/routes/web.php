<?php

use Illuminate\Support\Facades\Route;

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


// Route::get('create', function () {
//     return view('create');
// });

Route::resource('reqjob','App\Http\Controllers\ReqjobController');
Route::get('create-job',[App\Http\Controllers\HomeController::class,'createJob']);
Route::post('store-job',[App\Http\Controllers\HomeController::class,'storeJob']);


