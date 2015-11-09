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
    	Session::put('test', 'test');
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

    public function login(){
    	Session::put('token', $_POST['login_token']);
    	Session::put('nickname', $_POST['nickname']);

    	return redirect('/');
    	// echo "<script>alert('".Session::get('token')."')</script>";
    	// $_SESSION['token'] 		= $_POST['login_token'];
    	// $_SESSION['nickname']	= $_POST['nickname']; 
    }
}
