<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$role): Response
    {
        $user = Auth::user();
        if ($user === null) {
            return redirect()->to(route('login'));
        }
        foreach ($role as $roles) {
            if ($user->role === $roles) {
                return $next($request);
            }
        }
        return redirect()->to(route('unauthorized'));
    }
}
