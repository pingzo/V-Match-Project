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
    
    /* ---------- Route of Profiles ----------*/
    Route::get('/admin/', 'AdminController@index');
    //Route::get('/admin/', 'AdminController@destroy');
/* ---------- End Route of Profiles ----------*/
    //Route::resource('admin', 'AdminController');
    
/* ---------- Route of Profiles ----------*/
    Route::get('/profiles/{id}/index', 'ProfilesController@showProfile');
    Route::get('/profiles/{id}/create', 'ProfilesController@create');
    Route::get('/profiles/{id}/edit', 'ProfilesController@edit');
/* ---------- End Route of Profiles ----------*/
    
/* ---------- Route of Schools ----------*/
    Route::get('/schools/', 'SchoolsProfileController@index');
    Route::get('/schools/{id}/create', 'SchoolsProfileController@create');
    Route::post('/schools', 'SchoolsProfileController@store');
    //Route::get('/schools/{id}/edit', 'SchoolsProfileController@edit');
    //Route::post('/schools', 'SchoolsProfileController@update');
/* ---------- End Route of Schools ----------*/
    
    /* ---------- Route of Volunteers ----------*/
    Route::get('/volunteer/', 'VolunteersProfileController@index');
    Route::get('/volunteer/{id}/create', 'VolunteersProfileController@create');
    Route::post('/volunteer', 'VolunteersProfileController@store');
    Route::get('/volunteer/{id}/edit', 'VolunteersProfileController@edit');
/* ---------- End Route of Volunteers ----------*/

    Route::get('/tasks/', 'TaskController@index');
    Route::post('/tasks', 'TaskController@store');
    Route::delete('/tasks/{task}', 'TaskController@destroy');

});
