<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class passenger extends Model
{
    protected $table 	= 'passenger';
    public $primaryKey  = 'passenger_id';
    public $timestamps 	= false;
}
