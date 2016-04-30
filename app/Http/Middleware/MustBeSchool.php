<?php

namespace App\Http\Middleware;

use Closure;

class MustBeSchool
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
         $user = $request->user();
         if ($user && $user->role == 'school') {
            return $next($request);
         }      
         abort(403);   
    }
}
