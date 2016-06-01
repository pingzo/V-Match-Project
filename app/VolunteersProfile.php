<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VolunteersProfile extends Model
{
    
    protected $table = 'volunteersprofile';
    protected  $fillable = ['group_name','group_address','group_phone','require_id'];
    public $timestamps = false;
    
    public function  user(){
    return $this->belongsTo(User::class);
    }
}
