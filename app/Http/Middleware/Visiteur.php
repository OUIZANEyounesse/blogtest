<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;use App\Providers\RouteServiceProvider;



class Visiteur
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = 'visiteur')
    {
        if (Auth::guard($guard)->check()) {
            dd(2);
            return redirect(RouteServiceProvider::HOME);
        }

        return $next($request);
    }
}
