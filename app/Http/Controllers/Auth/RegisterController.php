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
	function showRegistrationForm(){

		return view('auth.register');
	}

   function register(Request $request){

		DB::table('users')->insert([
					'name'=>$request->name,
					'email'=>$request->email,
					'password' => Hash::make($request->password),
					
		]);
		
		return redirect('/register_succes');
	}
}