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

Route::get('/', function () {
    return view('welcome');
});

Route::get('aboutus', 'AboutusController@index');

Route::get('contactus', 'ContactusController@index');

Route::get('preregister', 'PreregisterController@index');

Route::get('product', 'ProductController@index'); 
Route::post('search', 'ProductController@search');


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

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::resource('volunteer', 'VolunteersProfileController');
    Route::resource('schools', 'SchoolsProfileController');
    Route::resource('admin', 'AdminController');
    Route::resource('profiles', 'ProfilesController');
    //Route::get('/schools/{id}/edit', 'SchoolsProfileController@edit');


});
