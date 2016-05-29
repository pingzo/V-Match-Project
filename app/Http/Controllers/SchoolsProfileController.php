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
        
   /* public function __construct(SchoolsRepository $schools) {
               $this->middleware('auth');
               $this->schools = $schools;
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
         $schools = SchoolsProfile::find($id);
         return view('schools.index',['schools'=>$schools]);
         //return view('schools.index');        
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request  $request)
    {   
        // $schools = User::find($id);
        // $schools = $request->user()->get();
        
        //$schools = $request->user()->schoolsprofile()->get();
       // return view('schools.create', ['schools'=>$schools]); 
         //$schools = User::find($id);
         return view('schools.create',[
                'schools'=>$this->schools->forUser($request->user()),
             
                ]);    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
              return redirect('/schools/');
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
        
         $school = SchoolsProfile::find($id);     
         return view('schools.edit',['school'=>$school]);
         //return $schools;
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
            //$schoolsprofile = SchoolsProfile::find($id); 
                  $schoolsprofile->name = $request->name; 
                  $schoolsprofile->code = $request->code; 
                  $schoolsprofile->address = $request->address; 
                  $schoolsprofile->city_id = $request->city_id; 
                  $schoolsprofile->tel = $request->tel; 
                   $schoolsprofile->sch_email = $request->sch_email; 
                  $schoolsprofile->require_id = $request->require_id;            
                  $schoolsprofile->save();
                  return view('schools.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, SchoolsProfile $school)
    {
         /*SchoolsProfile::find($id)->delete();
        return redirect()->action('SchoolsProfileController@index');*/       
         $this->authorize('destroy', $school);
         $school->delete();
         return redirect('/schools');
    }
}
