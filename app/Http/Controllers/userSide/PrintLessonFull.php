<?php

namespace App\Http\Controllers\userSide;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PrintLessonFull extends Controller
{
	function SelectLesson ($id){
		$lesson = DB::table('lesson')->where('id', $id)->get();
	
		return view('post.post', ['lesson'=> $lesson]);
	}
    
}
