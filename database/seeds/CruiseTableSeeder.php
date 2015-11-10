<?php

use Illuminate\Database\Seeder;

class CruiseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	for($i=0; $i<10; ++$i){
            $cruiseName = "Cruise_".($i+1);
    		DB::table('cruise')->insert([
	            'cruise_name' => $cruiseName,
	        ]);
    	}
    }
}
