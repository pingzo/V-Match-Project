<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';
    public $timestamps = false;
    protected  $fillable = ['firstname', 'lastname'];
    
    public function  getFullnameAttribute(){
        return $this->firstname." ".$this->lastname;
    }
    
}
