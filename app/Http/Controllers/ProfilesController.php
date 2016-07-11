<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use File;
use Storage;
use App\User;
use App\SchoolsProfile;
use App\VolunteersProfile;
//use App\Profiles;

class ProfilesController extends Controller
 {
        /*public function __construct() {
            $this->middleware('auth');
        }*/

         public function showProfile($id)
          {
                  $users = User::find($id);
                  return view('profiles.index', ['users'=>$users]);
          }

         public function edit($id)
          {
                  $users = User::find($id); 
                  $isVolunteer = empty(VolunteersProfile::where('user_id', '=', $id)->first()); //ส่งค่า $isVolunteer ไปเช็คว่าถ้ามีการเพิ่มข้อมูลอาสาหรือไม่
                  $isSchool = empty(SchoolsProfile::where('user_id', '=', $id)->first()); //ส่งค่า $isSchool ไปเช็คว่าถ้ามีการเพิ่มข้อมูลโรงเรียนหรือไม่
                  //dd(empty($isSchool));
                  return view('profiles.edit',['users'=>$users, 'isSchool'=>$isSchool, 'isVolunteer'=>$isVolunteer]);
          }
    
         public function update(Request $request, $id)
          {
                  $users = User::find($id);
                  if ($request->hasFile('image')) {
                           File::Delete('images/'.$users->image_name);
                           $file = $request->image;
                           $destinationPath = 'images';
                           $filename = str_random(10) . "." . $file->getClientOriginalExtension();
                           $upload_success = $file->move($destinationPath, $filename);
                           //dd($filename);
                   } 
                  else   {
                           $filename = $users->image_name;
                   }                  
                  $users->firstname = $request->firstname;
                  $users->lastname = $request->lastname;
                  $users->phone = $request->phone;
                  $users->email = $request->email;
                  $users ->image_name = $filename;
                  $users->save();  
                  $request->session()->flash('status', 'บันทึกข้อมูลเรียบร้อยแล้ว');
                  return redirect()->action('HomeController@index',['id'=>$id]);
          }

         public function destroy($id)
          {
                  Profiles::find($id)->delete();
                  return redirect()->action('ProfilesController@index');
          }
 } 
