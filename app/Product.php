<?php
class Product extends Model{



    public function schoolsProfile()
    {
        return $this->hasMany('App\SchoolsProfile');
    }

}