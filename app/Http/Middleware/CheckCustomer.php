<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckCustomer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->role=='Customer' || auth()->user()->role=='Admin')
        {
            return $next($request);
        }
        else
        {
            return redirect()->route('website.user')->with('msg','Permission denied.');
        }
        
    }
}
