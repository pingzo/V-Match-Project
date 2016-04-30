<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactusController extends Controller
{
    public function index()
    {
        return view('contactus');
    }
}
