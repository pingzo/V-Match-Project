<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VolunteersProfile extends Model
{
    
    protected $table = 'volunteersprofile';
    protected  $fillable = ['group_name','group_address','group_phone', 'group_email','require_id'];
    public $timestamps = false;
    protected $casts = ['user_id' => 'int' ];
    
    public function  user(){
    return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
