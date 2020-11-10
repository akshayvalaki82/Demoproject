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
         $customer_name = config('app.customer_name'); 
        // return $next($request);
            if(Auth::user()->id){
                return $next($request);
            }
            return redirect('/user-login');
    }
}
