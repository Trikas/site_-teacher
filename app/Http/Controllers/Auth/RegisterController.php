<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
class RegisterController extends Controller
{
	function showRegistrationForm($id){
	

		return view('auth.register', ['id' => $id]);
	}

   function register(Request $request, $id){

		DB::table('users')->insert([
					'name'=>$request->name,
					'email'=>$request->email,
					'password' => Hash::make($request->password),
					
		]);
		
		DB::table('user_info_for_reg')->where('id', $id)->delete();

		return redirect('/register_succes');
	}
}