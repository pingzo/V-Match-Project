<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\User;
use App\SchoolsProfile;
use App\Http\Requests\StoreSchoolsRequest;


class SchoolsProfileController extends Controller
{
    /*public function __construct() {
         $this->middleware('school');
    }*/

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
         //$userlogin = Auth::user();
         $school = SchoolsProfile::find($id);
         return view('schools.index',['school'=>$school]);
         //return $school;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
         
         $school = SchoolsProfile::find($id);
         return view('schools.create', ['school'=>$school]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolsRequest $request)
   {      
         $school = new Schools();
         /*$school->name = $request->name; 
         $school->code = $request->code; 
         $school->address = $request->address; 
         $school->city_id = $request->city_id; 
         $school->tel = $request->tel; 
         $school->sch_email = $request->sch_email; 
         $school->require_id = $request->require_id;            
         //$school->save();
         if ($request->hasFile('image')) {
                    $filename = str_random(10).'.'.$request->file('image')->getClientOriginalExtension();
                    $request->file('image')->move(public_path().'/images/',$filename);
                    Image::make(public_path().'/images/'.$filename)->fit(200)->save(public_path().'/images/resize/'.$filename);
                    $school->image = $filename;
         } else {
                  $school->image = 'nopic.jpg';
         }
        
        $school->save();*/
        $school->create($request->all()); 
        
        //$request->session()->flash('status', 'บันทึกข้อมูลเรียบร้อยแล้ว');
        
        //$book->create($request->all()); //ต้องไปกำหนด $fillable ที่ Model ด้วย
        
         return redirect()->action('SchoolsProfileController@index');
        //return back();
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
            $schoolsprofile = SchoolsProfile::find($id); 
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
    public function destroy($id)
    {
         SchoolsProfile::find($id)->delete();
        return redirect()->action('SchoolsProfileController@index');
    }
}
