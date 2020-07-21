<?php

namespace App\Http\Middleware;

use Closure;

class GuestMiddleware
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
        $roles = ["guest", "admin"];

      if(!in_array(auth()->user()->role, $roles)){
             return response(view('unauthorize')->with('role', 'USER'));
        }
        return $next($request);
    }
}
