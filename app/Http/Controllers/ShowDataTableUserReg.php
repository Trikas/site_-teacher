<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShowDataTableUserReg extends Controller
{
	function showUser(){

		$user_reg = DB::table('users')->get();

	    return view('adminsection.inc.user_reg', ['user_reg'=>$user_reg]);


	}
    //
}
