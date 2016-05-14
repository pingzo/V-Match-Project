<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolsProfile extends Model
{
    protected $table = 'schoolsprofile';
    protected $fillable = ['name', 'code', 'address', 'city_id', 'tel', 'sch_email','require_id','user_id'];
    public $timestamps = false;
    
    public function  user(){
        return $this->belongsTo(User::class);
    }
}