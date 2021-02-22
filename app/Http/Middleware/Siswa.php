<?php

namespace App\Http\Middleware;

use Closure;

class Siswa
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
         if(auth()->user()->level == 'siswa'){
            return $next($request);
        }
   
        return redirect('/admin')->with('error',"You don't have admin access.");
    }
}
