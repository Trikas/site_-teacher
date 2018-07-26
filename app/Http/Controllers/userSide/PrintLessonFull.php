<?php

namespace App\Http\Controllers\userSide;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PrintLessonFull extends Controller
{
	function SelectLesson (Request $request, $id){
		$lesson = DB::table('lesson')->where('id', $id)->get();
		
		$user = "";
		if (Auth::user()){
			$user = $request->user()->name;
		}
	
		return view('post.post', ['lesson'=> $lesson, 'user'=>$user]);
	}
    
}
