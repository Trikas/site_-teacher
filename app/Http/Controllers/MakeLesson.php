<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MakeLesson extends Controller
{
    function Make(){

    	return view('adminsection.inc.make_lesson');   }
}
