<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class SchoolsProfile extends Model
{
    protected $table = 'schoolsprofile';
    protected $fillable = ['users_id', 'name', 'code', 'address',  'tel', 'city_id', 'sch_email','require_id'];
    public $timestamps = false;
    protected $casts = ['user_id' => 'int' ];
   
    public function  user(){
        return $this->belongsTo(User::class,'users_id', 'id');
    }
}