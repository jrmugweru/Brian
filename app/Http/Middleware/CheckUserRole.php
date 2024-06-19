<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role = null)
    {
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->usertype == '1') {
                return redirect('/redirect');
            } else {
                return redirect('/redirect');
            }
        }

        return $next($request);
    }
}
