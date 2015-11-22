<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use AIServer;

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

        AIServer::trackEvent('index');
        AIServer::flush();

    	return view('index', $data);
    }

    public function about(){
        AIServer::trackEvent('about');
        AIServer::flush();
        return view('About');
    }

    public function contact(){
        AIServer::trackEvent('contract');
        AIServer::flush();
        return view('Contact');
    }

}
