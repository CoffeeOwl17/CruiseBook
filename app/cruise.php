<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cruise extends Model
{
    protected $table 	= 'cruise';
    public $primaryKey  = 'cruise_id';
    public $timestamps 	= false;

    public function packages(){
    	return $this->hasMany('App\cruise_package', 'cruise_id', 'cruise_id');
    }

    public function cabin(){
    	return $this->belongsToMany('App\cabinclass', 'cruise_id', 'cruise_id');
    }
}
