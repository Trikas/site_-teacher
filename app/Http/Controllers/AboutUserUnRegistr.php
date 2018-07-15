<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class AboutUserUnRegistr extends Controller
{
    function AboutUser(Request $request){
   	 
			return view('major_str.index');
	}	
}
