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

Route::get('/adminadoption', 'AdminAdoptionController@showform');

Route::post('/submitadoptionform', 'AdminAdoptionController@addnewanimal');

Route::get('view/{view}','AdminAdoptionController@viewAdoption')->name('adoptions.view');
Route::get('delete/{delete}','AdminAdoptionController@deleteAdoption')->name('adoptions.delete');
