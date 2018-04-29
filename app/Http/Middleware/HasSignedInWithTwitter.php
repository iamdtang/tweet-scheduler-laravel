<?php

namespace App\Http\Middleware;

use Closure;

class HasSignedInWithTwitter
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
        if (session('twitter-user')) {
            return $next($request);
        } else {
            return redirect('/login');
        }
    }
}
