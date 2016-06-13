<?php

namespace App;

use App\User;
use App\City;
use App\Requirement;
use App\Images;
use Illuminate\Database\Eloquent\Model;

class SchoolsProfile extends Model
{
    protected $table = 'schoolsprofile';
    protected $fillable = ['user_id', 'name', 'code', 'address',  'tel', 'city_id', 'sch_email','require_id','require_etc','image_name'];
    public $timestamps = false;
    protected $casts = ['user_id' => 'int' ];
   
    public function  user(){
        return $this->belongsTo(User::class, 'id');
    }
    
    public function  city(){
        return $this->belongsTo(City::class, 'city_id');
    }
    
    public function  requirement(){
        return $this->belongsTo(Requirement::class, 'require_id');
    }
    
    public function images()
    {
        return $this->hasMany('App\Images');
    }
}