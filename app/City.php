<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{

         protected $fillable = array('id', 'city');

         public $timestamps = false;
	
         protected $table = 'tbl_city';

         public function schools()
         {
                  return $this->hasMany('App\School');
         }

         public function schoolsProfile()
         {
                  return $this->hasMany('App\SchoolsProfile');
         }
}
