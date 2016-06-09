<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\VolunteersProfile;
use App\SchoolsProfile;

class VolunteersProfileController extends Controller
{
    /*public function __construct() {
        $this->middleware('auth');
    }*/

    public function index($id)
    {
         $volunteers = VolunteersProfile::where('id', '=', $id)->first();
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
                  'group_email'  => 'required|max:255', 
                  'require_id'  => 'required|max:255', 
         ]);

         $volunteer = $request->user()->volunteersprofiles()->create([
                  'group_name' => $request->group_name,
                  'group_address'  => $request->group_address, 
                  'group_phone'  => $request->group_phone,
                  'group_email'  => $request->group_email,
                  'require_id'  => $request->require_id,
         ]);
         return redirect()->action('VolunteersProfileController@index', ['id' => $volunteer->id]);
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

    public function destroy($id, $admin_id)
    {
         $volunteer = VolunteersProfile::find($id)->delete();
         return redirect()->action('AdminController@index', [$admin_id]);
    }
    
}
  