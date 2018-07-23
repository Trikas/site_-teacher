<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class AjaxTest extends Controller
{
    function test (Request $request){
        $all_message = DB::table('smsChat')->get();
        if ($request->ajax()){
            $sms = $request->sms;
            DB::table('smsChat')->insert([
                   'user_send' => $request->user()->name,
                   'destination' => 'VladO',
                   'content' => $sms,
                   'date' => date('j-m-Y в G:i', time())
     ]);
       
        
        
        }
        return view('adminsection.inc.sms_module', ['all_message'=>$all_message, 'user'=>$request->user()->name]);    
    }
}    

