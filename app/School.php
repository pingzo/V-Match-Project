<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public $timestamps = false;
	
    protected $table = 'schoolsprofile';

    public function city()
    {
        return $this->belongsTo('App\City');
    }

    public function requirement()
    {
        return $this->belongsTo('App\Requirement');
    }
}
