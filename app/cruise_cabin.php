<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cruise_cabin extends Model
{
    protected $table 	= 'cruise_cabin';
    public $primaryKey  = 'id';
    public $timestamps 	= false;

    public function cruiseclass(){
    	return $this->belongsTo('App\cabinclass', 'cabinClass_id');
    }
}
