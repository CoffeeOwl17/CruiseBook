<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App;
use Session;

class AdminController extends Controller
{
    public function index(){
    	$cruises = App\cruise::all();

    	return view('admin.AdminAdd', ['cruises' => $cruises]);
    }

    public function saveCruise(){
    	$package 						= new App\cruise_package;
    	
    	$package->package_name 			= $_POST['inputCruise'];
    	$package->departure_date 		= date("Y-m-d", strtotime($_POST['datepicker-from'])); 
    	$package->arrival_date 			= date("Y-m-d", strtotime($_POST['datepicker-until'])); 
    	$package->departure_location 	= $_POST['departureLocation'];
    	$package->arrival_location 		= $_POST['arrivalLocation'];
        $package->price                 = $_POST['price'];
    	$package->cruise_id 			= $_POST['cruiseID'];

    	 

    	$package->save();

    	Session::flash('message', 'Create new cruise package successfully');
    	Session::flash('alert-class', 'alert-success'); 

    	return redirect('/admin');
    }

    public function search ($action){
        $packages   = App\cruise_package::all();
        $data       = array(
            "action"    => $action,
            "packages"  => $packages        
            );
        return view('admin.AdminSearch', $data);
    }

    public function edit ($id){
        $package    = App\cruise_package::where('id', $id)->first();
        $cruises    = App\cruise::all();    
        $data       = array(
            "package"   => $package,
            "cruises"   => $cruises        
            );
        return view('admin.AdminEdit', $data);
    }

    public function updateCruise ($id){
        $package                        = App\cruise_package::where('id', $id)->first();
        
        $package->package_name          = $_POST['inputCruise'];
        $package->departure_date        = date("Y-m-d", strtotime($_POST['datepicker-from'])); 
        $package->arrival_date          = date("Y-m-d", strtotime($_POST['datepicker-until'])); 
        $package->departure_location    = $_POST['departureLocation'];
        $package->arrival_location      = $_POST['arrivalLocation'];
        $package->price                 = $_POST['price'];
        $package->cruise_id             = $_POST['cruiseID'];

         

        $package->save();

        Session::flash('message', 'Package '.$id.': Update successfully');
        Session::flash('alert-class', 'alert-success'); 

        return redirect('/search/edit');
    }

    public function view ($id){
        $package    = App\cruise_package::where('id', $id)->first();
        $cruises    = App\cruise::all();    
        $data       = array(
            "package"   => $package      
            );
        return view('admin.AdminView', $data);
    }
}
