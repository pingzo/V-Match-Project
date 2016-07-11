<?php namespace App\Http\Controllers;
use Input;
use Validator;
use Redirect;
use Illuminate\Http\Request;
use File;
use App\Images;
class UploadController extends Controller 
 {
         public function save(Request $request,$id) {
                //getting all of the post data
                //$files = $request->images;
                  $files = $request->file('images');
                // Making counting of uploaded images
                  $file_count = count($files);
                // start count how many uploaded
                  $uploadcount = 0;
                  foreach ($files as $file) {
                           $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
                           $validator = Validator::make(array('file'=> $file), $rules);
                           if ($validator->passes()) {
                                    $filename='';
                                    $destinationPath = 'images';
                                    $filename = str_random(10).".".$file->getClientOriginalExtension();
                                    $upload_success = $file->move($destinationPath, $filename);
                                    $img = new Images();
                                    $img->name = $filename;
                                    $img->schools_profile_id = $id;
                                    $img->save();
                            }
                   }
                  return back();
          }

         public  function delete($id) {
                  $img = Images::where('id', $id)->first();
                  File::Delete('images/'.$img->name);
                  $img->delete();
                  return back();
          }
    
 }