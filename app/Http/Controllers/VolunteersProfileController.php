<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\VolunteersProfile;
use App\SchoolsProfile;
use App\Images;
use File;

class VolunteersProfileController extends Controller
{
    /*public function __construct() {
        $this->middleware('auth');
    }*/

    public function index($user_id)
    {
//         $volunteers = VolunteersProfile::where('id', '=', $id)->first();
         
//         return view('volunteer.index',['volunteers'=>$volunteers, 'schools'=>$schools]);
            $volunteers = VolunteersProfile::where('user_id', '=', $user_id)->first();
            $schools = SchoolsProfile::where('require_id', '=', $volunteers->require_id)->get();
            return view('volunteer.index', ['volunteers' => $volunteers, 'schools'=>$schools]);
    }
    
    public function volByUser($id)
    {
         $volunteers = VolunteersProfile::where('user_id', '=', $id)->first();
         $schools = SchoolsProfile::where('require_id', '=', $volunteers->require_id)->get();
         return view('volunteer.index',['volunteers'=>$volunteers, 'schools'=>$schools]);
    }

    public function create(User $user)
    {
         $volunteers = VolunteersProfile::where('user_id', $user->id)->get();
         return view('volunteer.create',['volunteers'=>$volunteers]);  
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                  'group_name' => 'required|max:255',
                  'group_address'  => 'required|max:255', 
                  'group_phone'  => 'required|min:9|max:10', 
                  'group_email'  => 'required|email|max:255', 
                  'require_id'  => 'required|max:255', 
                  'image' =>'required|mimes:jpeg,bmp,png'
         ]);
        
        $file = $request->image;
        $destinationPath = 'images';
        $filename = str_random(10).".".$file->getClientOriginalExtension();
        $upload_success = $file->move($destinationPath, $filename);
        //dd($filename);

         $volunteers = $request->user()->volunteersprofiles()->create([
                  'group_name' => $request->group_name,
                  'group_address'  => $request->group_address, 
                  'group_phone'  => $request->group_phone,
                  'group_email'  => $request->group_email,
                  'require_id'  => $request->require_id,
                  'image_name' => $filename,
         ]);
         
         //return $volunteers;
         return redirect()->action('VolunteersProfileController@index', ['id' => $volunteers->user_id]);
    }
    
    public function upload(User $user)
    {
        $volunteers = VolunteersProfile::where('user_id', $user->id)->get();
        return view('volunteer.upload', ['volunteers' => $volunteers]);
    }

    public function edit($user_id)
    {
         $volunteers = VolunteersProfile::where('user_id', '=', $user_id)->first();
         return view('volunteer.edit',['volunteers'=>$volunteers]);
    }

    public function update(Request $request, $user_id)
    {
                  $volunteers = VolunteersProfile::where('user_id', '=', $user_id)->first();    
                  if ($request->hasFile('image')) {
                File::Delete('images/'.$volunteers->image_name);
                $file = $request->image;
                $destinationPath = 'images';
                $filename = str_random(10).".".$file->getClientOriginalExtension();
                $upload_success = $file->move($destinationPath, $filename);
            }else{
                $filename = $volunteers->image_name;
            }
                  $volunteers->group_name = $request->group_name;
                  $volunteers->group_address = $request->group_address;
                  $volunteers->group_phone = $request->group_phone;
                  $volunteers->group_email = $request->group_email;
                  $volunteers->require_id = $request->require_id;
                  $volunteers->image_name = $filename;
                  $volunteers->save();
                  return redirect()->action('VolunteersProfileController@index', ['id' => $user_id]);
                  //return back();
    }
    
    public function getUpload()
    {
        $images = VolunteersProfile::get();
        return view('volunteer.upload', ['images' => $images]);
    }

    public function destroy($id, $admin_id)
    {
         $volunteer = VolunteersProfile::find($id)->delete();
         return redirect()->action('AdminController@index', [$admin_id]);
    }
    
        public function mark($id, $admin_id)
    {
         $volunteer = VolunteersProfile::where('id', '=', $id)->first();
        if($volunteer->star_mark == 0){
            $volunteer->star_mark = 1;
        }else{
            $volunteer->star_mark = 0;
        }
         $volunteer->save();
        return redirect()->action('AdminController@index', [$admin_id]);
    }
    
}
  