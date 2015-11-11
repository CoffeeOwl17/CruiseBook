<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cabinclass extends Model
{
    protected $table 	= 'cabin_class';
    public $primaryKey  = 'cabinClass_id';
    public $timestamps 	= false;

    public function cruise(){
    	return $this->belongsToMany('App\cruise', 'cabinClass_id', 'cabinClass_id');
    }
}
