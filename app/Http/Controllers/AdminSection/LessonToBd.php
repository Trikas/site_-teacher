<?php

namespace App\Http\Controllers\AdminSection;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LessonToBd extends Controller
{
   function insertLesson (Request $request){
  		$contTxt = $request->txt;
   

    
      if ($request->id!=NULL){
           if (!empty($contTxt)){
            DB::table('lesson')
            ->where('id', $request->id)
            ->update([
             'content' => $contTxt,
             'author' => 'Олейник Ольга Іванівна',
             'title1' => $request->title1,
             'title2' => $request->title2,
             'date' => date('j-m-Y в G:i', time())
           ]);
          }

      }
   		elseif($contTxt!=NULL&&$request->title1!=NULL&&$request->title2!=NULL&&$request->hero[0]!=NULL){
   			DB::table('lesson')->insert([
				      'content' => $contTxt,
				      'author' => 'Олейник Ольга Іванівна',
				      'title1' => $request->title1,
              'title2' => $request->title2,
              'name_lesson'=>$request->hero[0],
            
              'date' => date('j-m-Y в G:i', time())
        ]);
        
    } 
   			return redirect('/admin/make_lesson');
   	

    }
}

