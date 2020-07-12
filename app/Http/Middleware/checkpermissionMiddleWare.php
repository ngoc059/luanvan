<?php

namespace App\Http\Middleware;
use Session;

use Closure;
class checkpermissionMiddleWare
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
        $data = Session::get('userLogin');
        if(isset($data)) {
            return $next($request);
        }
        // return $next($request);
        return redirect('/user/login-out');
    }
}