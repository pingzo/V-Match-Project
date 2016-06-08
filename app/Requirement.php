<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    public $timestamps = false;
	
    protected $table = 'tbl_req';

    public function schools()
    {
        return $this->hasMany('App\School');
    }
    
     public function schoolsRequire()
    {
        return $this->hasMany('App\SchoolsProfile');
    }
}
