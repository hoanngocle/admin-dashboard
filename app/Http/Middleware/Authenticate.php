<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class Authenticate
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
        if (Sentinel::check()) {
            return $next($request);
        }

        return redirect()->route('auth.login.form')->withErrors('You must be logged in as an administrator.');
    }
}
