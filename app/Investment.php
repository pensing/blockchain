<?php

namespace App;

use App\Investor;
use App\Recipient;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $fillable = ['name' , 'recipient', 'amount', 'investor'];  

    public function feedback(){
        $this->hasMany('App\feedback');
    }
    public function investmentslist(){
        return $this->all();
    }
}
