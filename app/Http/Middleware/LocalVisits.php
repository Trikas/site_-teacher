<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Closure;

class LocalVisits
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
    $response = $next($request);

        if (!Auth::check()){
                if (session('userlocal')==NULL){
                    $ip = $_SERVER['REMOTE_ADDR'];
                    $access_key = '085c7185d8f15a963737db092136643a';

                    $ch = curl_init('http://api.ipstack.com/'.$ip.'?access_key='.$access_key.'');
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    $json = curl_exec($ch); 
                    curl_close($ch);

                    $api_result = json_decode($json, true);
                    $latitude_longitude = $api_result['latitude'].','.$api_result['longitude'];
                    
                if($api_result['country_name']!=NULL&&$api_result['region_name']!=NULL){
                   DB::table('visits')->insert([
                        'country_name' => $api_result['country_name'],
                        'region_name' => $api_result['region_name'],
                        'latitude_longitude' => $latitude_longitude            
                        ]);
                    
                   
             
                }
                   session(['userlocal'=>'1']);  
                }          
            }

    return $response;
                       
    }
      
}

