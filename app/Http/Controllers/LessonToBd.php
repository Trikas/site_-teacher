<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LessonToBd extends Controller
{
   function insertLesson (Request $request){
  		$contTxt = $request->txt;
   		if (!empty($contTxt)){
   			DB::table('lesson')->insert([
				      'content' => $contTxt,
				      'author' => 'Олейник Ольга Ивановна',
				      'title' => 'Урок'
				  ]);

   			return redirect('/admin/make_lesson');
   		} 

    }
}

