<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class About extends Controller
{
    	function HeadMenu (Request $request){
		$user = "";
		if (Auth::user()){
			$user = $request->user()->name;
			}

			return view('major_str.about', ['user'=>$user]);
    	}
		
	//
}
