<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\User;

class AboutUserUnRegistr extends Controller
{
    function AboutUser(Request $request){
   		$visits = DB::table('visits')->get();
   
   		if (!Auth::check()){
    		$ip = $_SERVER['REMOTE_ADDR'];
    		
			$access_key = '085c7185d8f15a963737db092136643a';

			$ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$json = curl_exec($ch);
			curl_close($ch);

			$api_result = json_decode($json, true);
			$latitude_longitude = $api_result['latitude'].','.$api_result['longitude'];

			foreach ($visits as  $value) {
   				if ($value->country_name==$api_result['country_name']&&$value->region_name==$api_result['region_name']&&$value->latitude_longitude==$latitude_longitude ){

   				}else{
   					DB::table('visits')->insert([
							      'country_name' => $api_result['country_name'],
							      'region_name' => $api_result['region_name'],
							      'latitude_longitude' => $latitude_longitude
							     
    							]);
   				}
   			}	
		}		
	}
}
