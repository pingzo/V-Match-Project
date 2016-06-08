<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
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
         //return $users;
    }

    public function edit($id)
    {
         $users = User::find($id); 
         $isVolunteer = empty(VolunteersProfile::where('user_id', '=', $id)->first());
         $isSchool = empty(SchoolsProfile::where('user_id', '=', $id)->first());
         //dd(empty($isSchool));
         return view('profiles.edit',['users'=>$users, 'isSchool'=>$isSchool, 'isVolunteer'=>$isVolunteer]);
    }
    
    public function update(Request $request, $id)
    {
         $users = User::find($id);
         $users->firstname = $request->firstname;
         $users->lastname = $request->lastname;
         $users->phone = $request->phone;
         $users->email = $request->email;
         $users->save();  
         return back();
    }

    public function destroy($id)
    {
         Profiles::find($id)->delete();
         return redirect()->action('ProfilesController@index');
    }
}
