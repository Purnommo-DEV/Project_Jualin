<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Authcheck
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
        if(!session()->has('LoggedUser') && ($request->path()!='login' && $request->path()!='register')){
            return redirect('/login')->with('fail','You must be logged in');
        }
        if(session()->has('LoggedUser') && ($request->path()=='login' || $request->path()=='register')){
            return redirect('jabatan');
    }
        return $next($request)->header('cache-control','no-cache','no-store','max-age=0','must-revalidate')
                              ->header('Pragma','no-cache')
                              ->header('Expires','sat 01 januari 1990 00:00:00 GMT');
    }
}
