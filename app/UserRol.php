<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userrol extends Model
{
    protected $quarded = [];
    public function userRol(){
        return $this->hasOne('App\User');
    }
}
