<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Checkuser
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
        // echo "this is my globle middleware";
        return $next($request);
    }
}
