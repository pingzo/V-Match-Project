<?php


Route::group(['middleware' => ['web']], function () {

});

Route::group(['middleware' => 'web'], function () {
    Route::auth();
    
    Route::get('/', function () {
    return view('welcome'); });
    
    Route::get('/preregister', 'PreregisterController@index');
    Route::get('/product', 'ProductController@index');
    Route::post('/search', 'ProductController@search');
    Route::get('/home', 'HomeController@index');
    Route::get('/aboutus', 'AboutusController@index');
    Route::get('/viewschool','ProductController@viewschool');
    //Route::get('/contactus', 'ContactusController@index');
    
    
    
    /* ---------- Route of Admin ----------*/
    Route::get('/admin/{id}/index', 'AdminController@index');
/* ---------- End Route of Admin ----------*/
    
/* ---------- Route of Profiles ----------*/
    Route::get('/profiles/{id}/index', 'ProfilesController@showProfile');
    Route::get('/profiles/{id}/edit', 'ProfilesController@edit');
    Route::post('/profiles/{id}/edit', 'ProfilesController@update');
/* ---------- End Route of Profiles ----------*/
    
/* ---------- Route of Schools ----------*/
    Route::get('/schools/{id}/index', 'SchoolsProfileController@index');
    Route::get('/schools/{id}/create', 'SchoolsProfileController@create');
    Route::post('/schools', 'SchoolsProfileController@store');
    Route::get('/schools/{id}/edit', 'SchoolsProfileController@edit');
    Route::post('/schools/{id}/edit', 'SchoolsProfileController@update');
    Route::get('/schools/{id}/mark/{admin_id}', 'SchoolsProfileController@mark');
    Route::get('/schools/{id}/destroy/{admin_id}', 'SchoolsProfileController@destroy');
    Route::get('/schools/{id}/info', 'SchoolsProfileController@schByUser');
    Route::get('/schools/{id}/upload', 'SchoolsProfileController@upload');
/* ---------- End Route of Schools ----------*/
    
    /* ---------- Route of Volunteers ----------*/
    Route::get('/volunteer/{id}/index', 'VolunteersProfileController@index');
    Route::get('/volunteer/{id}/create', 'VolunteersProfileController@create');
    Route::post('/volunteer', 'VolunteersProfileController@store');
    Route::get('/volunteer/{id}/edit', 'VolunteersProfileController@edit');
    Route::post('/volunteer/{id}/edit', 'VolunteersProfileController@update');
    Route::get('/volunteer/{id}/mark/{admin_id}', 'VolunteersProfileController@mark');
    Route::get('/volunteer/{id}/destroy/{admin_id}', 'VolunteersProfileController@destroy');
    Route::get('/volunteer/{id}/info', 'VolunteersProfileController@volByUser');

/* ---------- End Route of Volunteers ----------*/
    
    /* ---------- Route of Uploadd ----------*/
    Route::post('/uploads/{id}/schools', 'UploadController@save');
    Route::get('/uploads/{id}/delete', 'UploadController@delete');
    /* ---------- End  Route of Uploadd ----------*/


});
