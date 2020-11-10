<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
// use Auth;

class UserMiddleware
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
        // return $next($request);
            if(Auth::user()->hasRole($customer_name)){
                return $next($request);
            }
            return redirect('frontend/all_page/login');
    }
}
