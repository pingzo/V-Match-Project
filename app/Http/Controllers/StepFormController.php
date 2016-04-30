<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StepFormController extends Controller
{
     public function index()
    {
        return view('stepform.index');
    }
}
