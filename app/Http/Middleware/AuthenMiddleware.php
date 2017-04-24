<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class AuthenMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        session_start();
//        if(Session::get('authen') == 'tunguyen')
        if (isset($_SESSION['authen']) &&  $_SESSION['authen'] == md5('16hcb'))
            return $next($request);
        else
            return redirect('login');
    }
}
