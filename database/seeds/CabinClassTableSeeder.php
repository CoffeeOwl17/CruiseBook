<?php

use Illuminate\Database\Seeder;

class CabinClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $class = array('First Class', 'Business Class', 'Premium Economy Class', 'Economy Class');
        $price = array(1000, 700, 500, 300);

        for($i=0; $i<4; ++$i){
    		DB::table('cabin_class')->insert([
	            'class' => $class[$i],
	            'price'	=> $price[$i],
	        ]);
    	}
    }
}
