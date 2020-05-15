<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class Test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   if(Auth::check()){
       if(Auth::user()->userType=='Admin'){
        dd('PHP dept &  501');
       }elseif (Auth::user()->userType=='User'){
        dd('html dept &  502');
       }
    }else{
        return redirect('/login');
        
    }
    }
    
}
