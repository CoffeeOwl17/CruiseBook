<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

session_start();

class IndexController extends Controller
{
    public function index(){
    	$token = "";

    	if(Session::has('token')){
    		$token 		= Session::get('token');
    		$nickname 	= Session::get('nickname');
    		$data = array(
    			"token"		=> $token,
    			"nickname"	=> $nickname
    			);
    	}
    	else{
    		$data = array(
    			"token"		=> "",
    			"nickname"	=> ""
    			);
    	}

        $telemetryClient = new \ApplicationInsights\Telemetry_Client();
        $telemetryClient->getContext()->setInstrumentationKey('42df5617-a39e-4d1f-a8a4-342e3650a4f2');
        $telemetryClient->trackEvent('index');
        $telemetryClient->flush();

    	return view('index', $data);
    }

    public function about(){
        return view('About');
    }

    public function contact(){
        return view('Contact');
    }

}
