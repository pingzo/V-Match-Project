<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
{
     public function __construct(){
        $this->middleware('admin');
        
    }

    public function index()
    {
        return view('admin.index');
    }
    
    public function create()
    {
       
    }
    
     public function store(Request $request)
     {
         
    }
    
     public function show($id)
     {
        
    }
    public function edit($id)
    {
        
    }
    
    public function update(Request $request, $id)
    {
        
    }
    
    public function destroy($id)
    {
        
    }
}
