<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profiles extends Model
{
    protected $table = 'users';
    protected $fillable = ['id','firstname','lastname','phone','email','role','image_name'];
    public $timestamps = false;
      
    public function  user(){
    return $this->belongsTo(User::class); //return inverse
}
}
