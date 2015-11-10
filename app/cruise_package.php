<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cruise_package extends Model
{
    protected $table 	= 'cruise_package';
    public $primaryKey  = 'id';
    public $timestamps 	= false;

    public function cruise(){
    	return $this->belongsTo('App\cruise', 'cruise_id');
    }
}
