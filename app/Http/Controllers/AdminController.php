<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Profiles;
use App\SchoolsProfile;
use App\VolunteersProfile;

class AdminController extends Controller
    {
         public function __construct(){
                $this->middleware('admin');
        
    }

    public function index()
    {
         //$users = User::all();
         $profiles= Profiles::orderBy('id','desc')->get();
         $count = Profiles::count(); //นับจำนวนแถวทัง􀀩 หมด
         return view('admin.index', [
            'profiles' => $profiles,
            'count' => $count,
         ]); // ส่งไปที􀀭 views โฟลเดอร์ admin ไฟล์ index.blade.php
    }
  
    public function destroy($id)
    {
         //Profiles::find($id)->delete();
         $profiles = Profiles::destroy($id);
         return back();
         //return redirect()->action('AdminController@index');
    }
}
