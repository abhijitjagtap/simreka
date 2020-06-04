<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use User;

class Admin
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
        
//dd(Auth::check());
//dd(Auth::user());
        if(!Auth::check())
        {
       // exit;
            return redirect()->route('login');
        }

        if(Auth::user()->roll == 1)
        {
            return $next($request);
        }
        if(Auth::user()->roll == 2)
        {
            return redirect()->route('simreka');
        }
        if(Auth::user()->roll == 3)
        {
            return redirect()->route('user');
        }
        
    }
}
