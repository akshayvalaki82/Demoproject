<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminMiddleware
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
        $admin_name = config('app.admin_name');
        // dd($admin_name);
        // return $next($request);
        if(Auth::user()->hasRole($admin_name))
        {
        return $next($request);
        }
        return redirect('/login');
    }
}
