<?php

namespace App\Http\Middleware;

use Closure;
use Sentinel;

class CheckRoleAdmin
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
        if (Sentinel::getUser()->inRole('administrator')) {
            return $next($request);
        }

        return redirect()->route('auth.login.form')->with('err', __('You have not permission to access.'));
    }
}
