<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowDataTableUserVisit extends Controller
{
    	function showUser(){

		$user_visits= DB::table('visits')->get();

	    return view('adminsection.inc.user_visits', ['user_visits'=>$user_visits]);


	}//
}
