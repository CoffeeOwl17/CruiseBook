<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class LogoutController extends Controller
{
    public function index(){
    	Session::flush();
    	return redirect('/');
    }
}
