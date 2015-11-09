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
    	return view('index', $data);
    }

    public function admin(){
    	return view('admin.AdminHome');
    }
}
