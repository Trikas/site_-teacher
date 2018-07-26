<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class AjaxTest extends Controller
{
    function test (Request $request){
    if ($request->ajax()){
         DB::table('smsChat')->insert([
        'user_send'=>$request->user()->name,
        'destination'=>$request->destination,
        'content'=>$request->sms,
        'date_send' => date('j-m-Y в G:i', time())
      ]);

  }
   $all_message = DB::table('smsChat')->orderBy('unique_id_sms', 'desc')
                ->get();
                  
   return view('adminsection.inc.sms_module_sms', ['all_message'=>$all_message, 'user'=>$request->user()->name]);  
}


    // function show (Request $request){
    //   $all_message = DB::table('smsChat')->orderBy('unique_id_sms', 'desc')
    //             ->get();

   

    //   return view('adminsection.inc.sms_module', ['all_message'=>$all_message, 'user'=>$request->user()->name]);    
    }
}    
   