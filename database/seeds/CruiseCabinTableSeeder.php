<?php

use Illuminate\Database\Seeder;
use App\cruise;
use App\cabinclass;
use App\cruise_cabin;

class CruiseCabinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cruises 		= cruise::all();
        $cabinclasses 	= cabinclass::all();

        // $cruise_cabin 	= new cruise_cabin;
        foreach($cruises as $cruise){
        	foreach($cabinclasses as $class){
        		for($i=1; $i<=20; ++$i){
        			$cabin_name = $cruise->cruise_name.'-'.$class->cabinClass_id.sprintf('%03d', $i);;
        			DB::table('cruise_cabin')->insert([
			            'cruise_cabin' 	=> $cabin_name,
			            'cabinClass_id'	=> $class->cabinClass_id,
			            'cruise_id' 	=> $cruise->cruise_id
			        ]);
        		}
        	}
        }
    }
}
