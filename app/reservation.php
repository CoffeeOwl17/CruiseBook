<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    protected $table 	= 'reservation';
    public $primaryKey  = 'reservation_id';
    public $timestamps 	= false;

}
