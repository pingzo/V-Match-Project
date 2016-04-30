<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\School;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SchoolController extends Controller
{
    public function __construct(){
        $this->middleware('schools');
   	}
	
         public function index(){
                 
                 return view('schools.index');
    }

}