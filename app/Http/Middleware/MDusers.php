<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class MDusers
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
        $currentuser = \Auth::user();// Obtenemos el usuario actual
        if(isset($currentuser)){
            if($currentuser = 1){
            }
        }else{
            return redirect('login');

            return $next($request);
        }
    }
}
