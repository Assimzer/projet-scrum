<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use App\Models\Bulletin;

class BulletinMiddleware
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
        if(Auth::check()){
            $bulletinIDs = [];
            $allowed = false;
            foreach(Auth::user()->bulletins() as $bulletin){
                array_push($bulletinIDs, $bulletin);
            }
            dd($bulletinIDs);
            foreach($bulletinIDs as $id){
                if($request->id == $id){
                    $allowed = true;
                }
            }
            if($allowed){
                return $next($request);
            }else{
                return "your are not allowed to view this bulletin";
            }
        }else{
            return redirect()->route('bulletin.index');
        }
        
    }
}
