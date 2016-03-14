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
    public function handle($request, Closure $next, $guard = null)
    {
//        if (Auth::guard($guard)->check()) {
//            return redirect('/aaa');
//        }

        return $next($request);
    }
//    public function handle($request, Closure $next){
//        if (Auth::check()) {
//            if (!Auth::user()->is_admin) {
//                return new RedirectResponse(url('/'));
//            } else {
//                return new RedirectResponse(url('/aaa'));
//            }
//        }
//        return $next($request);
//    }
}
