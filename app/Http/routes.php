<?php
//home page
Route::get('/home','RentalHomeController@index');
//create new page
Route::resource('pages','PageController');
Route::get('home/pages/createPage/{id}','PageController@show');
Route::post('home/pages/createPage/','PageController@store');
//create new account
Route::get('home/pages/createAccount',function(){return view('createAccount');});
Route::resource('pages','AccountController');
Route::post('home/pages/createAccount','AccountController@store');
//edit page
Route::get('home/pages/{id}/edit','PageController@editPage');
Route::post('home/pages/{id}/delete','PageController@deletePage');
Route::post('home/pages/{id}/edit','PageController@update');
//user home page
Route::get('home/pages/userHome','userHomeController@index');
//user authentication
Route::get('home/pages/login', 'AccountController@checkLogin');
Route::post('home/pages/login', 'AccountController@checkLogin');
//search
Route::post('home/search',function(){return view('searchResult');});
Route::get('home/search',function(){return view('searchResult');});
Route::post('/home',function(){return view('rentalHome');});
//Route::post('home/search','PageController@search');

// Registration routes...

//return login
Route::get('home/pages/login',function(){return view('login');});
//userHome
Route::get('userHome/{id}','AccountController@show');
Route::get('wrong',function(){ return view('wrong');});
//view page
Route::get('home/pages/{id}/view','PageController@viewPage');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
