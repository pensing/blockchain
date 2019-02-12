<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userrol extends Model
{
    protected $guarded = [];
    
    public function userRol(){
        return $this->hasOne('App\User');
    }
    
    public function createUserRol($attributes){
        return $this->create($attributes);
    }
}
