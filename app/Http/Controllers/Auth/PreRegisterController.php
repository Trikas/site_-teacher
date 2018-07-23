<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PreRegisterController extends Controller
{
	// принимаем ввод пишем в таблицу пользователей которых нужно будет заегестрировать
	function showRegistrationForm(){

		return view ('auth.preRegistr');
	}

	function register(Request $request){

		DB::table('user_info_for_reg')->insert([
					'name'=>$request->name,
					'familia'=>$request->famil,
					'otchestvo'=>$request->otch,
					'email'=>$request->email,
					'phone'=>$request->phone
		]);
		
		return redirect('/login_info');
	}

}