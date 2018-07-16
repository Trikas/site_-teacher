<?php

namespace App\Http\Controllers\AdminSection;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LessonToBd extends Controller
{
   function insertLesson (Request $request){
  		$contTxt = $request->txt;
   		if (!empty($contTxt)){
   			DB::table('lesson')->insert([
				      'content' => $contTxt,
				      'author' => 'Олейник Ольга Ивановна',
				      'title' => $request->title,
              'date' => date('j-m-Y в G:i', time())
        ]);

   			return redirect('/admin/make_lesson');
   		} 

    }
}

