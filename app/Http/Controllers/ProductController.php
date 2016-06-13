<?php

namespace App\Http\Controllers;

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

    public function search(Request $request){

    	$city_id = $request->input('City_ID');
    	$sub_id = $request->input('Sub_ID');

    	if ($city_id != '' & $sub_id != '') {
    		$schools = School::where('city_id', '=', $city_id)
    	->where('require_id', '=', $sub_id)
    	->get();
    	}else{
    		$schools = School::where('city_id', '=', $city_id)
    	->orWhere('require_id', '=', $sub_id)
    	->get();
    	}

    	return view('product')->with('schools', $schools);

    }

	public function showSchoolInfo($user_id)
	{
		$schools = SchoolsProfile::where('user_id', '=', $user_id)->get();
		//$imageList = Images::where('schools_profile_id', $schools->id)->paginate(3);
		return view('product',['schools'=>$schools]);

	}

  
  


}

