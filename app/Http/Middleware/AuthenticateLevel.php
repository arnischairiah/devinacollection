<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthenticateLevel
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$level)
    {
        // SPECIFY WHAT PAGE CAN A USER SEE BASED ON THEIR LEVEL
        if(in_array($request->user()->level, $level))
        {
            return $next($request);
        }

        // IF USER IS NOT AUTHENTICATED, SEND THEM BACK TO LANDING PAGE
        return redirect('/');
    }
}
