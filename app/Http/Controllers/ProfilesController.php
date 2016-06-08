<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\SchoolsProfile;
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
         $isSchool = empty(SchoolsProfile::where('user_id', '=', $id)->first());
         //dd(empty($isSchool));
         return view('profiles.edit',['users'=>$users, 'isSchool'=>$isSchool]);
    }
    
    public function update(Request $request, $id)
    {
         $user = User::find($id);
         $user->firstname = $request->firstname;
         $user->lastname = $request->lastname;
         $user->phone = $request->phone;
         $user->email = $request->email;
         $user->role = $request->role;
         $user->save();  
         return view('profiles.index');
    }

    public function destroy($id)
    {
         Profiles::find($id)->delete();
         return redirect()->action('ProfilesController@index');
    }
}
