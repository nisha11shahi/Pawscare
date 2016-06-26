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
Route::get('/singlepost', 'BlogController@showsinglepost');



Route::get('/viewalladopt', 'AdminAdoptionController@viewall');
Route::get('/viewalladoptmessage', 'AdminAdoptionController@viewallmessage');
Route::get('/adminadoption', 'AdminAdoptionController@showform');
Route::post('/submitadoptionform', 'AdminAdoptionController@addnewanimal');
Route::get('deleteadoption/{delete}','AdminAdoptionController@deleteAdoption')->name('adoptions.delete');



Route::get('/viewalllostandfound', 'AdminLostandFoundController@viewall');
Route::get('/adminlostandfound', 'AdminLostandFoundController@showform');
Route::post('/submitlostform', 'AdminLostandFoundController@addnewanimal');
Route::get('delete/{delete}','AdminLostandFoundController@deleteAnimal')->name('lostandfounds.delete');


Route::get('/adminmessage', 'AdminMessageController@showmessagelist');

Route::get('/adminblog', 'AdminBlogController@showform');
Route::get('/postblog', 'AdminBlogController@submitpost');

// Route::get('/adminusers', 'UserController@showlist');

Route::get('adminusers', [
	'middleware' => 'auth',
	'uses' => 'AdminController@showlist'
	]);

Route::post('/submitcontactform', 'ContactMessageController@submitcontactform');

Route::post('/submitadoptform', 'AdoptController@submitadoptform');

Route::post('/reportemergency', 'EmergencyController@submitemergencyform');
