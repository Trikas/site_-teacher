<?php

namespace App\Http\Controllers\AdminSection;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ShowDataTableUserWait extends Controller
{
    	function showUser(){

		$user_wait = DB::table('user_info_for_reg')->get();

	    return view('adminsection.inc.wait_reg', ['user_wait'=>$user_wait]);


	}
	function delUser ($id){
		
		DB::table('user_info_for_reg')->where('id', $id)->delete();

		return redirect('/admin/waiting_reg');

	}
}
