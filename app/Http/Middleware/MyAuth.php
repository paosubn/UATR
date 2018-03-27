<?php

namespace App\Http\Middleware;

use Closure;

class MyAuth
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
        if ($request->path()=='/'||$request->path()=='verificar') {
            return $next($request);
        }
        else{
            if(session('zona')!=null&&session('unidad')!=null&&session('grupo')!=null&&session('usuario')!=null){
                return $next($request);
            }
            else{
                return redirect('/');
            }
        }
    }
}
