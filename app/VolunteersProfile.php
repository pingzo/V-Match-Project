<?php

namespace App;
use App\User;
use App\Requirement;

use Illuminate\Database\Eloquent\Model;

class VolunteersProfile extends Model
{
    
    protected $table = 'volunteersprofile';
    protected  $fillable = ['user_id', 'group_name','group_address','group_phone', 'group_email','require_id'];
    public $timestamps = false;
    protected $casts = ['user_id' => 'int' ];
    
    public function  user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    public function  requirement(){
        return $this->belongsTo(Requirement::class, 'require_id');
    }
    }

