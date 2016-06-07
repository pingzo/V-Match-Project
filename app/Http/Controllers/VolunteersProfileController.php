<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\VolunteersProfile;

class VolunteersProfileController extends Controller
{
    /*public function __construct() {
        $this->middleware('auth');
    }*/

    public function index()
    {
         /*$userlogin = Auth::user();
         $users = User::with('volunteersprofile')->find($userlogin->id);
         return $users;*/
         return view('volunteer.index');
    }

    public function create(User $user)
    {
        /* $users = User::find($id); //with is join table
         return view('volunteer.create',['users'=>$users]);*/
         
         $volunteers = VolunteersProfile::where('user_id', $user->id)->get();
         return view('volunteer.create',['volunteers'=>$volunteers]);  
    }

    public function store(Request $request)
    {
        $this->validate($request, [
                  'group_name' => 'required|max:255',
                  'group_address'  => 'required|max:255', 
                  'group_phone'  => 'required|min:9|max:10', 
                  'group_email'  => 'required|max:255', 
                  'require_id'  => 'required|max:255', 
         ]);

         $request->user()->volunteersprofile()->create([
                  'group_name' => $request->group_name,
                  'group_address'  => $request->group_address, 
                  'group_phone'  => $request->group_phone,
                  'group_email'  => $request->group_email,
                  'require_id'  => $request->require_id,
         ]);
    }

    public function edit($id)
    {
         $users = User::find($id); //with is join table
         return view('volunteer.edit',['users'=>$users]);
    }

    public function update(Request $request, $id)
    {
                  $volunteers = VolunteersProfile::find($id);
                  $volunteers->group_name = $request->group_name;
                  $volunteers->group_address = $request->group_address;
                  $volunteers->group_phone = $request->group_phone;
                  $volunteers->group_email = $request->group_email;
                  $volunteers->require_id = $request->require_id;
                  $volunteers->save();
                  return view('volunteer.index');
    }

    public function destroy($id)
    {
         VolunteersProfile::find($id)->delete();
        return redirect()->action('VolunteersProfileController@index');
    }
}
  