<?php

namespace App\Http\Middleware;

use Closure;

class EmployeeAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next = null, $guard = null)
    {
        if (!Auth::guard($guard)->check()) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
