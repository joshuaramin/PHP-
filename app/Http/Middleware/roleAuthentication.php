<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class roleAuthentication
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response
    {


        if (!Auth::check()) {
            return redirect("/login");
        }

        if (Auth::check() && Auth::user()->role !== $role) {
            return redirect('/'); // Redirect to an unauthorized page if role doesn't match
        }

        return $next($request);
    }
}
