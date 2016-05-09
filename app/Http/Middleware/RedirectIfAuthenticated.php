<?php

namespace Demo\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */

    public function handle($request, Closure $next){
        if (Auth::check()) {
            if (!Auth::user()->is_admin) {
                return view('errors.AccessDenied',['errinfo'=>'If U want do this, U must be admin']);
            }
        }
        return $next($request);
    }
}
