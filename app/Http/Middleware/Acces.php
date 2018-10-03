<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Acces
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
        $id = Auth::user();
        if($id->role_id==2){
            return redirect("/home");
        }
        return $next($request);
    }
}
