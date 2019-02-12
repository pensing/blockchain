<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class UserRolController extends Controller
{
    protected $guarded = [];
    public function userrol(){
        return $this->belongsTo('App\User');
    }
}
