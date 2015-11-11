<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use DB;
use Session;

class BookingController extends Controller
{
    public function search(){
    	$packages   = App\cruise_package::all();
        $data       = array(
            "packages"  => $packages        
            );
        return view('book.SearchCruise', $data);
    }

    public function chooseCruise($id){
    	$cabins = DB::table('cruise_cabin')
	        ->join('cruise', 'cruise_cabin.cruise_id', '=', 'cruise.cruise_id')
            ->join('cruise_package', 'cruise_package.cruise_id', '=', 'cruise.cruise_id')
            ->where('cruise_package.id', $id)
            ->select('cruise_cabin.id', 'cruise_cabin.cruise_cabin', 'cruise_cabin.cabinClass_id', 'cruise_cabin.cruise_id')
            ->get();

        $reservations 	= App\reservation::where('package_id', $id)->get();
    	$classes  		= App\cabinclass::all();
    	$data 			= array(
    		"package_id"	=> $id,
    		"cabins"		=> $cabins,
    		"classes"		=> $classes,
    		"reservations"	=> $reservations
    		);
    	return view('book.Cabin', $data);
    	// return ($reservations);
    }

    public function passengerInfo($package, $cabin){
    	$chosenPackage	= App\cruise_package::where('id', $package)->first();
    	$chosenCabin	= App\cruise_cabin::where('id', $cabin)->first();
    	return view('book.Passenger', ["package"=>$package, "cabin"=>$cabin, "cabin_price"=>$chosenCabin->cruiseclass->price, "package_price"	=> $chosenPackage->price ]);

    }

    public function confirmPayment($package, $cabin){
    	$passenger = App\passenger::where('passenger_id', $_POST['txtIC'])->first();
    	if($passenger == null){
    		$passenger = new App\passenger;
    	}
    	
    	$passenger->passenger_id	= $_POST['txtIC'];
    	$passenger->first_name		= $_POST['txtFirstName'];
    	$passenger->last_name		= $_POST['txtLastName'];
    	$passenger->gender			= $_POST['optGender'];
    	$passenger->dob				= date("Y-m-d", strtotime($_POST['dateDOB'])); 
    	$passenger->address			= $_POST['txtAddress'];
    	$passenger->email			= $_POST['txtEmail'];
    	$passenger->save();

    	$reservation = new App\reservation;
    	$reservation->passenger_id	= $_POST['txtIC'];
    	$reservation->package_id	= $package;
    	$reservation->cruise_cabin	= $cabin;
    	$reservation->save();
    	if($passenger->gender == 'M'){
    		Session::flash('message', 'Thank you Mr. '.$_POST['txtFirstName'].' for booking our cruise ticket. Enjoy your trip!');
    	}
    	else{
    		Session::flash('message', 'Thank you Ms. '.$_POST['txtFirstName'].' for booking our cruise ticket. Enjoy your trip!');
    	}
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/booking');
    }
}
