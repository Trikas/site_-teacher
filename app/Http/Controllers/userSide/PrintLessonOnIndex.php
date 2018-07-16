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
   	 	
   	 	$lesson = DB::table('lesson')->get();	
		return view('major_str.index', ['lesson'=>$lesson]);
	}	
}
