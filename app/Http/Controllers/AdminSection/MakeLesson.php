<?php

namespace App\Http\Controllers\AdminSection;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MakeLesson extends Controller
{
    function Make(){

    	return view('adminsection.inc.make_lesson');   }
}
