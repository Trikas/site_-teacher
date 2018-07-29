<?php

namespace App\Http\Controllers\AdminSection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class MakeLesson extends Controller
{
    function Make($id=""){

    	$lesson = DB::table('lesson')->where('id', $id)->get();
    	$less="";
    	$title1="";
    	$title2="";
		foreach ($lesson as $value) {
			$less = $value->content;
			$title1 = $value->title1;
			$title2 = $value->title2;
		}

    	return view('adminsection.inc.make_lesson', ['lesson'=> $less, 'id'=>$id, 'title1'=>$title1, 'title2'=> $title2]);
	}

	function DelPost($id){

		DB::table('lesson')->where('id', $id)->delete();

		// $redirect = preg_replace('#.\d#', " ", $_SERVER['REQUEST_URI']);

	

		return redirect('admin/all_lessons');
	}
}
