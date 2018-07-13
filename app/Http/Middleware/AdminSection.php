<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminSection
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
        if(Auth::user()!=NULL){
            if (Auth::user()->id==1&&Auth::user()->name=='Trikaka'){
             return $next($request);
            }
        }
        

       return redirect('home');

    }
}
