<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\SchoolsProfile;
use App\Images;
use File;
use App\Http\Requests\StoreSchoolsRequest;

class SchoolsProfileController extends Controller
{       
  /* public function __construct() {
               $this->middleware('auth');
    }*/
    
    public function index($user_id)
    {
        $schools = SchoolsProfile::where('user_id', '=', $user_id)->first();
        $imageList = Images::where('schools_profile_id', $schools->id)->paginate(3);
        return view('schools.index',['schools'=>$schools,'imageList'=>$imageList]);
       
    }
    
    public function schByUser($id)
    {
         $schools = SchoolsProfile::where('user_id', '=', $id)->first();
         $imageList = Images::where('schools_profile_id', $schools->id)->paginate(3);
         return view('schools.index',['schools'=>$schools,'imageList'=>$imageList]);   
    }

    public function create(User $user)
    {   
        $schools = SchoolsProfile::where('user_id', $user->id)->get();
         return view('schools.create',['schools'=>$schools]);  
    }

    public function store(Request $request)
   {      
         $this->validate($request, [
                  'name' => 'required|max:255',
                  'code'  => 'required|min:10|max:10', 
                  'address'  => 'required|max:255', 
                  'city_id'  => 'required|max:255', 
                  'tel'  => 'required|min:9|max:10', 
                  'sch_email'  => 'required|email|max:255',
                  'require_id'  => 'required|max:255',
                  'require_etc'  => 'required|max:255',
                  'image' =>'required|mimes:jpeg,bmp,png'
         ]);
         $file = $request->image;
         $destinationPath = 'images';
         $filename = str_random(10).".".$file->getClientOriginalExtension();
         $upload_success = $file->move($destinationPath, $filename);
         //dd($filename);

         $school = $request->user()->schoolsprofile()->create([
                  'name' => $request->name,
                  'code'  => $request->code, 
                  'address'  => $request->address,
                  'city_id'  => $request->city_id,
                  'tel'  => $request->tel,
                  'sch_email'  => $request->sch_email,
                  'require_id'  => $request->require_id,
                  'require_etc'  => $request->require_etc,
                  'image_name' => $filename,
         ]);
               //return redirect()->action('SchoolsProfileController@index', ['id' => $school->id]);
                  return redirect()->action('SchoolsProfileController@index', ['id' => $school->user_id]);
    }
    
    public function upload($user_id)
    {
        $schools = SchoolsProfile::where('user_id', $user_id)->first();
        $imageList = Images::where('schools_profile_id', $schools->id)->paginate(5);
        return view('schools.upload',['schools'=>$schools,'imageList'=>$imageList]);
    }

    public function edit($user_id)
    {  
         $school = SchoolsProfile::where('user_id', '=', $user_id)->first();
         //return $school;
         return view('schools.edit',['school'=>$school]);   
    }

    public function update(Request $request,$user_id)
    {
                  $school = SchoolsProfile::where('user_id', '=', $user_id)->first();  
                  if ($request->hasFile('image')) {
                  File::Delete('images/'.$school->image_name);
                  $file = $request->image;
                  $destinationPath = 'images';
                  $filename = str_random(10).".".$file->getClientOriginalExtension();
                  $upload_success = $file->move($destinationPath, $filename);
                  }else{
                  $filename = $school->image_name;
                  }
                  $school->name = $request->name; 
                  $school->code = $request->code; 
                  $school->address = $request->address; 
                  $school->city_id = $request->city_id; 
                  $school->tel = $request->tel; 
                  $school->sch_email = $request->sch_email;
                  $school->require_id = $request->require_id;
                  $school->require_etc = $request->require_etc;
                  $school->image_name = $filename;
                  $school->save();
                  return redirect()->action('SchoolsProfileController@index', ['id' => $school->user_id]);
                 //return back();
    }
    
    public function getUpload()
    {
         $images = SchoolsProfile::get();
         return view('schools.upload', ['images' => $images]);
    }

    public function destroy($id, $admin_id)
    { 
         $school = SchoolsProfile::find($id)->delete();
         return redirect()->action('AdminController@index', [$admin_id]);
    }
           
    public function mark($id, $admin_id)
    {
        $school = SchoolsProfile::where('id', '=', $id)->first();
        if($school->star_mark == 1){
            $school->star_mark = 0;
        }else{
            $school->star_mark = 1;
        }
        $school->save();
        return redirect()->action('AdminController@index', [$admin_id]);
    }

    public function volFav($user_id, $vol_id)
    {
        $school = SchoolsProfile::where('user_id', '=', $user_id)->first();
        if($school->vol_fav == 1){
            $school->vol_fav = 0;
        }else{
            $school->vol_fav = 1;
        }
        $school->save();
        return redirect()->action('VolunteersProfileController@index', [$vol_id]);
    }
        
}
