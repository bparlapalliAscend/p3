<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
   Route::get('/', function () {
	  //    return view('welcome');
  	 return 'Hello There - this is Laravel';
	});

	Route::get('/', 'DBFController@getIndex');	
	Route::get('/lorem', 'DBFController@getLorem');	
	Route::post('/lorem', 'DBFController@postLorem');	
	
  	Route::get('/user', 'DBFController@getUsers');		
	Route::post('/user', 'DBFController@postUsers');
  
   
     Route::get('/practice', function() {
     	$random = new Rych\Random\Random();
      return $random->getRandomString(8);

     	return "Practice";
     });
});
