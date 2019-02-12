<?php

namespace App;

use App\Investor;
use App\Recipient;
use Illuminate\Database\Eloquent\Model;

class Investment extends Model
{
    protected $fillable = ['recipient', 'amount', 'investor'];  

    
}
