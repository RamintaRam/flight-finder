<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfLogin
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

        if( auth()->user()) {
            return $next($request);
        } else {

//        return redirect('login');
//        return $next($request);
            return redirect('login');
        }
    }
}
