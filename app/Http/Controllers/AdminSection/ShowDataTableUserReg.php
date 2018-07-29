<?php

namespace App\Http\Controllers\AdminSection;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ShowDataTableUserReg extends Controller
{
	function showUser(){

		$user_reg = DB::table('users')->get();

	    return view('adminsection.inc.user_reg', ['user_reg'=>$user_reg]);


	}

	function delUser ($id) {

		DB::table('users')->where('id', $id)->delete();
		return redirect('/admin/user_reg');
	}
    //
}
