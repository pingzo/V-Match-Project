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

Route::get('/aboutus', 'AboutusController@index');

Route::get('/contactus', 'ContactusController@index');

Route::get('/preregister', 'PreregisterController@index');

Route::get('/product', 'ProductController@index'); 
Route::post('/search', 'ProductController@search');




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
    //Route::resource('volunteer', 'VolunteersProfileController');
    //Route::resource('schools', 'SchoolsProfileController');
    //Route::resource('profiles', 'ProfilesController');
    Route::resource('admin', 'AdminController');
    
/* ---------- Route of Profiles ----------*/
    Route::get('/profiles/{id}/index', 'ProfilesController@showProfile');
    Route::get('/profiles/{id}/create', 'ProfilesController@create');
    Route::get('/profiles/{id}/edit', 'ProfilesController@edit');
/* ---------- End Route of Profiles ----------*/
    
/* ---------- Route of Schools ----------*/
    Route::get('/schools/{id}/index', 'SchoolsProfileController@index');
    Route::get('/schools/{id}/create', 'SchoolsProfileController@create');
    Route::post('/schools', 'SchoolsProfileController@store');
    Route::get('/schools/{id}/edit', 'SchoolsProfileController@edit');
/* ---------- End Route of Schools ----------*/


});
