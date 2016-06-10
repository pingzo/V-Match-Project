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

    public function index($id)
    {
         $users= User::orderBy('id','asc')->paginate(5);
         $volunteers= VolunteersProfile::orderBy('user_id','asc')->paginate(5);
         $schools= SchoolsProfile::orderBy('user_id','asc')->paginate(5);
         //return $schools;
         return view('admin.index', [
            'users' => $users,
             'volunteers' => $volunteers,
             'schools' => $schools,
             'admin_id'=> $id]); // ส่งไปที views โฟลเดอร์ admin ไฟล์ index.blade.php
    }

        public function destroy($id)
    {
         $volunteers = VolunteersProfile::destroy($id);
         $schools= SchoolsProfile::destroy($id);
         return back();
    }
}
