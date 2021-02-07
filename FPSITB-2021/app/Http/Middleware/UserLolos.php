<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserLolos
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
        if (auth()-> user()->status == 3){
            return $next($request);
        }
        return redirect('/');
    }
}
