<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
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
        //Lo que permite que siga adelante el http
        if(auth()->user()->email == "schimmel.mohamed@example.net"){
            return $next($request);
        }else{

            return redirect("no-autorizado");
        }
    }
}
