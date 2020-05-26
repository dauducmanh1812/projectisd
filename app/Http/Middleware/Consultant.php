<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class Consultant
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
        if (Auth::check() && Auth::user()->role == 'consultant') {
            return $next($request);
        }
        else {
            return redirect('/client');
        }
    }
}
