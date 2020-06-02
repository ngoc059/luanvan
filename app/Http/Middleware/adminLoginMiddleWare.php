<?php

namespace App\Http\Middleware;

use Closure;
session_start();
class adminLoginMiddleWare
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
        if(isset($_SESSION['user']) && $_SESSION['user']->gender == 1) {
            return $next($request);
        }
        return view('auth.login');
    }
}
