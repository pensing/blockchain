<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $guarded =[];
    
    public function investment(){
        $this->belongsTo('App\Investment');
    }
}
