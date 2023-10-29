<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class after_login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!(session()->has('id') && session()->get('role') == 'user')) {
            return redirect('beforelogin');
        }
        // if (session()->get('role') == 'Admin') {
        //     return $next($request);
        // }

        // if (session()->get('role') == 'User') {
        //     return $next($request);
        // }

        return $next($request);
    }
}
