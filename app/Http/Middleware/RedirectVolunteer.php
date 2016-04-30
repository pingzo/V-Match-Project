<?php

namespace App\Http\Middleware;


use Closure;

class RedirectVolunteer
{
/**
 * Handle an incoming request.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \Closure  $next
 * @param  string|null  $guard
 * @return mixed
 */
public function handle($request, Closure $next)
    {
        $user = $request->user();
        if ($user && $user->role == 'volunteer') {
            return $next($request);
        }      
        abort("Isn't volunteer");      
    }
/*public function handle($request, Closure $next, $guard = 'school')
{
    if (!Auth::guard($guard)->check()) {
        return redirect('/');
    }

    return $next($request);
}*/
}
