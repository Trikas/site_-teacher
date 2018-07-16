<?php

namespace App\Http\Controllers\AdminSection;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PrintAllLessons extends Controller
{
	function SelectAllLess(){
	$lessons = DB::table('lesson')->get();

	return view('adminsection.inc.all_lessons', ['lessons'=>$lessons]);	  
	}
	  
}
