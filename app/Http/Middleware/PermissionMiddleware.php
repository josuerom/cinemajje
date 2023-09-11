<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $permiso)
    {
        if (Auth::guest()) {
            return redirect('/login');

        }
        if (! $request->user()->can($permiso)) {
            abort(403);
        }
        return $next($request);
    }
}
