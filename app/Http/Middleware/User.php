<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class User
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
        if(!Auth::check())
        {
            return redirect()->route('login');
        }

        if(Auth::user()->roll == 1)
        {
            return redirect()->route('admin');
           
        }
        if(Auth::user()->roll == 2)
        {
            return redirect()->route('simreka');
            
        }
        if(Auth::user()->roll == 3)
        {
            return $next($request);
        }
    }
}
