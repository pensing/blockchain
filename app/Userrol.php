<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userrol extends Model
{
    protected $guarded = [];
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function createUserRol($attributes){
        return $this->create($attributes);
    }
}
