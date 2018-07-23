<?php
namespace App\Http\Controllers\userSide;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Http\Controllers\Controller;

class PrintLessonOnIndex extends Controller
{
    function SelectBd(Request $request){
		$user = "";
		if (Auth::user()){
			$user = $request->user()->name;
		}
   	 	$lesson = DB::table('lesson')->paginate(4);	
		return view('major_str.index', ['lesson'=>$lesson, 'user'=>$user]);
	}	
}
