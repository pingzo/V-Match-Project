<?php


Route::group(['middleware' => ['web']], function () {

});

Route::group(['middleware' => 'web'], function () {

         Route::auth();
    
         Route::get('/', function () {
                  return view('welcome'); }); // show main page of v-match

         Route::get('/aboutus', 'AboutusController@index'); // show describe info of v-match

         Route::get('/preregister', 'PreregisterController@index'); // show condition before register

/*--------- Search Schools---------*/
         Route::get('/product', 'ProductController@index'); // show search schools
         Route::post('/search', 'ProductController@search'); // method search schools

         Route::get('/home', 'HomeController@index'); // show profiles page when fiirst registed and logedin

/* ---------- Route of Admin ----------*/
         Route::get('/admin/{id}/index', 'AdminController@index'); // Admin's manage page

/* ---------- Route of Profiles ----------*/
         Route::get('/profiles/{id}/index', 'ProfilesController@showProfile'); // schow info of profile
         Route::get('/profiles/{id}/edit', 'ProfilesController@edit'); // edit profile
         Route::post('/profiles/{id}/edit', 'ProfilesController@update'); // method update profile

/* ---------- Route of Schools ----------*/
         Route::get('/schools/{id}/index', 'SchoolsProfileController@index');
         Route::get('/schools/{id}/create', 'SchoolsProfileController@create');
         Route::post('/schools', 'SchoolsProfileController@store');
         Route::get('/schools/{id}/edit', 'SchoolsProfileController@edit');
         Route::post('/schools/{id}/edit', 'SchoolsProfileController@update');
         Route::get('/schools/{id}/mark/{admin_id}', 'SchoolsProfileController@mark'); // mark confirm real schools from admin's role
         Route::get('/schools/{id}/destroy/{admin_id}', 'SchoolsProfileController@destroy'); // delete schools from admin's role
         Route::get('/schools/{id}/info', 'SchoolsProfileController@schByUser'); // show school's info
         Route::get('/schools/{id}/upload', 'SchoolsProfileController@upload'); // upload school's pictures
         Route::get('/schools/{id}/volFav/{vol_id}', 'SchoolsProfileController@volFav'); //favorit from volunteer's role


/* ---------- Route of Volunteers ----------*/
         Route::get('/volunteer/{id}/index', 'VolunteersProfileController@index');
         Route::get('/volunteer/{id}/create', 'VolunteersProfileController@create');
         Route::post('/volunteer', 'VolunteersProfileController@store');
         Route::get('/volunteer/{id}/edit', 'VolunteersProfileController@edit');
         Route::post('/volunteer/{id}/edit', 'VolunteersProfileController@update');
         Route::get('/volunteer/{id}/mark/{admin_id}', 'VolunteersProfileController@mark');
         Route::get('/volunteer/{id}/destroy/{admin_id}', 'VolunteersProfileController@destroy');
         Route::get('/volunteer/{id}/info', 'VolunteersProfileController@volByUser');
        //Route::get('/volunteer/{id}/volFav/', 'VolunteersProfileController@volFav'); //favorit from volunteer's role
    

/* ---------- Route of Uploadd ----------*/
         Route::post('/uploads/{id}/schools', 'UploadController@save'); // method save pictures
         Route::get('/uploads/{id}/delete', 'UploadController@delete'); // method delete pictures



});
