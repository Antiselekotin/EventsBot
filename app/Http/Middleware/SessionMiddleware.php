<?php

namespace App\Http\Middleware;

use Closure;
use function Symfony\Component\String\s;

class SessionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public
    function handle($request, Closure $next)
    {
        $path = $request->path();
        if (md5(session('password')) !== env('ADMIN_PASSWORD')
            && md5(session('login')) !== env('ADMIN_LOGIN')
            && $path !== 'auth'
            && $path !== 'check')
        {

            return redirect()
                ->route('main.auth')
                ->with(['path' => $path]);
        }
        return $next($request);
    }
}
