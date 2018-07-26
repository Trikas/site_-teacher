<?php

namespace App\Http\Controllers\Lessons;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class SelectLessons extends Controller
{
    function choiceLess(Request $request, $name){
	  switch ($name) {
		  case 'less_read':
		    $lessName = "Уроки читання";
		    break;
		  case 'less_mat':
		    $lessName = "Уроки математики";
		    break;
		  case 'less_art':
		    $lessName = "Природознавство та мистецтво";
		    break;
		  case 'less_lang':
		    $lessName = "Уроки української мови";
		    break;        
		  
		  default:
		    $lesName = "Уроки";
		    break;
	}
    	if (Auth::user()){
    		$nameUser=$request->user()->name;
    	}
    	$nameUser = "";

		$less = DB::table('lesson')->where('name_lesson', $name)->paginate(10);
	
		return view('less_chois', ['lesson'=>$less, 'user'=>$nameUser, 'lessName'=>$lessName]);

    }
}
