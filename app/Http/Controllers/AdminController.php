<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\VolunteersProfile;
use App\SchoolsProfile;


class AdminController extends Controller
    {
         public function __construct(){
                $this->middleware('admin');      
    }

    public function index()
    {
         $users= User::orderBy('id','asc')->get();
         $volunteers= VolunteersProfile::orderBy('user_id','asc')->get();
         $schools= SchoolsProfile::orderBy('user_id','asc')->get();
         return view('admin.index', [
            'users' => $users,'volunteers' => $volunteers,'schools' => $schools]); // ส่งไปที views โฟลเดอร์ admin ไฟล์ index.blade.php
    }
  
    public function destroy($id)
    {
         $users = Profiles::destroy($id);
         return back();
    }
}
