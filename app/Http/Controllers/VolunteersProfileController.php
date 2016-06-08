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

    public function index($user_id)
    {
         $volunteers = VolunteersProfile::where('user_id', '=', $user_id)->first();
         return view('volunteer.index',['volunteers'=>$volunteers]);
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
                  'group_email'  => 'required|max:255', 
                  'require_id'  => 'required|max:255', 
         ]);

         $request->user()->volunteersprofiles()->create([
                  'group_name' => $request->group_name,
                  'group_address'  => $request->group_address, 
                  'group_phone'  => $request->group_phone,
                  'group_email'  => $request->group_email,
                  'require_id'  => $request->require_id,
         ]);
          return view('volunteer.index');
    }

    public function edit($user_id)
    {
         $volunteers = VolunteersProfile::where('user_id', '=', $user_id)->first();
         return view('volunteer.edit',['volunteers'=>$volunteers]);
    }

    public function update(Request $request, $user_id)
    {
                  $volunteers = VolunteersProfile::where('user_id', '=', $user_id)->first();    
                  $volunteers->group_name = $request->group_name;
                  $volunteers->group_address = $request->group_address;
                  $volunteers->group_phone = $request->group_phone;
                  $volunteers->group_email = $request->group_email;
                  $volunteers->require_id = $request->require_id;
                  $volunteers->save();
                  return back();
    }

    public function destroy($id)
    {
         VolunteersProfile::find($id)->delete();
        return redirect()->action('VolunteersProfileController@index');
    }
}
  