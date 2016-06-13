<?php
namespace App;

use App\User;
use App\City;
use App\SchoolsProfile;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'photoschools';
    protected $fillable = ['name', 'schools_profile_id'];
    public $timestamps = false;

    public function  schoolsprofile(){
        return $this->belongsTo(SchoolsProfile::class, 'schools_profile_id');
    }
}