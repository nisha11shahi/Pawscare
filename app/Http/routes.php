<?php

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

Route::get('/', function () {
    return view('frontend/index');
});

Route::get('admin', [

	'middleware' => 'auth',
    'uses' =>'AdminController@showdashboard'
]);

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/adopt', 'AdoptController@show');
Route::get('/lostandfound', 'LostandFoundController@show');
Route::get('/blog', 'BlogController@show');
Route::get('/contact', 'ContactMessageController@show');
Route::get('/adoptform', 'AdoptController@showform');

