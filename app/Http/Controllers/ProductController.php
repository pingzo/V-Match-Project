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

  
  


}

