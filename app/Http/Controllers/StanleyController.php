<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StanleyController extends Controller
{
    public function index()
    {
        return view('stanley.index');
    }
}
