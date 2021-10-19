<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
class RoleMiddleware
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

        //Verifie Que tu est Admin pour acceder a ces routes car le middleware seras appliquer a toute les route sauf show
        if(Auth::user()->roles->profileType == "Admin"){
            return $next($request);
        }else{
            return "your are not allowed to view this page";
        }
    }
}
