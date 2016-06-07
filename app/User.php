<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Task;
use Auth;
use App\SchoolsProfile;
use App\VolunteersProfile;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',  'lastname', 'phone', 'email', 'password',  'role',
    ];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function volunteersprofiles(){
        return $this->hasOne(VolunteersProfile::class,' foreign_key','user_id', 'id');
    } 
    
    public function schoolsprofile(){
         return $this->hasOne(SchoolsProfile::class,' foreign_key','user_id', 'id');
    }
    
     public function tasks()
    {
        return $this->hasMany(Task::class);
    }
    
    /*public function getRoleAttribute()
    {
        $user = User::with('volunteersprofile')->find(Auth::user()->id);
        return $user->volunteersprofile->role;
    }*/
    
    
    
}
