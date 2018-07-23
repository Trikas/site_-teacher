<?php

namespace App\Http\Controllers\AdminSection;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ShowDataTableUserVisit extends Controller
{
    	function showUser(){

		$user_visits= DB::table('visits')->get();

	    return view('adminsection.inc.user_visits', ['user_visits'=>$user_visits]);


	}//
}
