<?php

namespace App\Http\Controllers\AdminSection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\User;

class IndexPageModule extends Controller
{	
	function selectBd(Request $request){
		$user_reg_col = DB::table('users')->get();//общее кол-во зареганых польз.

		$user_visits_col = DB::table('visits')->get();
		$user_reg = DB::table('users')->get();//все зарег пользователи

		$user_wait_col = DB::table('user_info_for_reg')->get();





	return view('adminsection.index', [	'count_user' => count($user_reg), 
				'count_visits' => count($user_visits_col), 
				'user_reg' => $user_reg,
				'count_wait'=> count($user_wait_col),
				// 'all_message'=>$all_message, 
				'user'=>$request->user()->name
										]);
	
		

	}
    
}
