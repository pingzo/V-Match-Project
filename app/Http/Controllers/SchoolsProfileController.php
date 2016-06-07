<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\SchoolsProfile;
use App\Http\Requests\StoreSchoolsRequest;
use App\Repositories\SchoolsRepository;

class SchoolsProfileController extends Controller
{
        protected $schools;
        
   public function __construct(SchoolsRepository $schools) {
               $this->middleware('auth');
               $this->schools = $schools;
    }

    public function index($id)
    {
         $schools = SchoolsProfile::find($id);
         return view('schools.index',['schools'=>$schools]);
         //return view('schools.index');        
    }

    public function create(User $user)
    {   
        $schools = SchoolsProfile::where('user_id', $user->id)->get();
         return view('schools.create',['schools'=>$schools]);  
         
        /* return view('schools.create', [
            'schools' => $this->schools->forUser($request->user()),
        ]);*/
    }

    public function store(Request $request)
   {      
         $this->validate($request, [
                  'name' => 'required|max:255',
                  'code'  => 'required|min:10|max:10', 
                  'address'  => 'required|max:255', 
                  'city_id'  => 'required|max:255', 
                  'tel'  => 'required|min:9|max:10', 
                  'sch_email'  => 'required|max:255',
                  'require_id'  => 'required|max:255', 
         ]);

         $request->user()->schoolsprofile()->create([
                  'name' => $request->name,
                  'code'  => $request->code, 
                  'address'  => $request->address,
                  'city_id'  => $request->city_id,
                  'tel'  => $request->tel,
                  'sch_email'  => $request->sch_email,
                  'require_id'  => $request->require_id,
         ]);
              return view('schools.index');
    }

    public function edit($user_id)
    {  
        /* if ( $school = SchoolsProfile::where('user_id', '=', $user_id)->get()){
            echo $school;
         } else {
            echo 'not find';
         }*/
         $school = SchoolsProfile::where('user_id', '=', $user_id)->get();
         return view('schools.edit',['school'=>$school]);   
    }

    public function update(Request $request,$user_id)
    {
                  $school = SchoolsProfile::where('user_id', '=', $user_id)->get();    
                  $school->name = $request->name; 
                  $school->code = $request->code; 
                  $school->address = $request->address; 
                  $school->city_id = $request->city_id; 
                  $school->tel = $request->tel; 
                   $school->sch_email = $request->sch_email; 
                  $school->require_id = $request->require_id;            
                  $school->save();
                 return back();
    }

    public function destroy(Request $request, SchoolsProfile $school)
    {
         /*SchoolsProfile::find($id)->delete();
        return redirect()->action('SchoolsProfileController@index');*/       
         $this->authorize('destroy', $school);
         $school->delete();
         return redirect('/schools');
    }
}
