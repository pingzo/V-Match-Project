<?php

namespace App\Http\Controllers;

use App\SchoolsProfile;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\City;
use App\School;

class ProductController extends Controller
 {
         public function index()
          {
                  return view('product');
          }

         public function search(Request $request)
          {
    	$city_id = $request->input('City_ID');
    	$sub_id = $request->input('Sub_ID');
    	 if ($city_id != '' & $sub_id != '') {
                           $schools = School::where('city_id', '=', $city_id)
                                    ->where('require_id', '=', $sub_id)->orderBy('name','asc')->get();
    	 }
                  else   {
                           $schools = School::where('city_id', '=', $city_id)
                                    ->orWhere('require_id', '=', $sub_id)->orderBy('name','asc')->get();
    	 }
    	return view('product')->with('schools', $schools);
          }
	
         public function viewSchool($user_id)
          {
                  $schools = SchoolsProfile::where('id', '=', $user_id)->first();
                  return redirect()->action('SchoolsProfileController@index', ['id' => $schools->user_id]);
          }
    
 }

