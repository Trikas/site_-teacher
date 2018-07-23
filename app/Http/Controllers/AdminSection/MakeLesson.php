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
    	$title="";
		foreach ($lesson as $value) {
			$less = $value->content;
			$title = $value->title;
		}

    	return view('adminsection.inc.make_lesson', ['lesson'=> $less, 'id'=>$id, 'title'=>$title]);
	}
}
