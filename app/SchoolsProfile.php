<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SchoolsProfile extends Model
{
    protected $table = 'schoolsprofile';
    protected $fillable = ['id', 'name', 'code', 'address', 'city_id', 'tel', 'sch_email','require_id', 'role'];
    public $timestamps = false;
    
    public function  user(){
        return $this->belongsTo(User::class);
    }
}