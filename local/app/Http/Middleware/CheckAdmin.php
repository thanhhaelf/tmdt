<?php

namespace App\Http\Middleware;

use Closure,Session;

class CheckAdmin
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
        if(!Session::has('username')){
            return redirect('login');
        }
        return $next($request);
        return $next($request);
    }
}
