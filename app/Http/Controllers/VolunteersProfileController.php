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

    public function create($id)
    {
         $users = User::find($id); //with is join table
         return view('volunteer.create',['users'=>$users]);
    }

    public function store(Request $request)
    {
        $book = new Books();
        $book->title = $request->title;
        $book->price = $request->price;
        $book->typebooks_id = $request->typebooks_id;
       
        $book->save();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
         $users = User::find($id); //with is join table
         return view('volunteer.edit',['users'=>$users]);
    }

    public function update(Request $request, $id)
    {
            $user = VolunteersProfile::find($id);
            $user->firstname = $request->firstname;
            $user->lastname = $request->lastname;
            $user->phone = $request->phone;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->save();
            
            $volunteersprofile = VolunteersProfile::find($id);
            
            if(isset($volunteersprofile)){
                  $volunteersprofile->gname = $request->gname;
                  $volunteersprofile->address = $request->address;
                  $volunteersprofile->gphone = $request->gphone;
                  $volunteersprofile->require_id = $request->require_id;
                 
                  $volunteersprofile->save();
            }else{
                  $volunteersprofile = new VolunteersProfile();
                  $volunteersprofile->id =Auth::user()->id;

                  $volunteersprofile->gname = $request->gname;
                  $volunteersprofile->address = $request->address;
                  $volunteersprofile->gphone = $request->gphone;
                  $volunteersprofile->require_id = $request->require_id;
                
                  $volunteersprofile->save();
            }
         return view('volunteer.index');
    }

    public function destroy($id)
    {
         VolunteersProfile::find($id)->delete();
        return redirect()->action('VolunteersProfileController@index');
    }
}
  