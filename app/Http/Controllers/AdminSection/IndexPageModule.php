<?php

namespace App\Http\Controllers\AdminSection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class IndexPageModule extends Controller
{	
	function selectBd(Request $request){
		$user_reg_col = DB::table('users')->select('id')->orderBy('id', 'ask');//общее кол-во зареганых польз.
		$user_visits_col = DB::table('visits')->select('id')->orderBy('id', 'ask');
		$user_reg = DB::table('users')->get();//все зарег пользователи

		$user_wait_col = DB::table('user_info_for_reg')->select('id')->orderBy('id', 'ask');

		$count_user = (array) $user_reg_col->first();
		$count_visits = (array) $user_visits_col->first();
		$count_wait  =(array) $user_wait_col->first();
		$msg = "This is a simple message.";



	return view('adminsection.index', [	'count_user' => $count_user, 
											'count_visits' => $count_visits, 
											'user_reg' => $user_reg,
											'test' => $request->input('id'), 
											'count_wait'=> $count_wait
										]);
	
		

	}
    
}
