<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SendSms extends Controller
{
       	function HeadMenu (Request $request){
		$user = "";
		if (Auth::user()){
			$user = $request->user()->name;
			}

		$st = '';
	

			return view('major_str.send_sms', ['user'=>$user, 'status'=>$st]);
    	}
    	function InsertToBd(Request $request){
    	$user = "";
		if (Auth::user()){
			$user = $request->user()->name;
			}

		if ($request->all()){
		DB::table('users_msg')->insert([
    	'name'=>$request->name,
    	'email'=>$request->email,
    	'phone'=>$request->phone,
    	'msg'=>$request->msg
    	]);
		$st = 'Повідомлення відправлено';
	}

			return view('major_str.send_sms', ['user'=>$user, 'status'=>$st]);
    	}
		
}
