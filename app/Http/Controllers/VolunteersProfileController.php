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

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         /*$userlogin = Auth::user();
         $users = User::with('volunteersprofile')->find($userlogin->id);
         return $users;*/
         return view('volunteer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $users = User::with('volunteersprofile')->find($id); //with is join table
         return view('volunteer.edit',['users'=>$users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
            $user = User::find($id);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         VolunteersProfile::find($id)->delete();
        return redirect()->action('VolunteersProfileController@index');
    }
}
  