<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isDepartemen
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('dpt')->check() || Auth::guard('dpt')->user()->role !== 'departemen') {
            abort(403);
            dd(Auth::guard('dpt')->user()->role);
            // return response()->view('forbidden',[],403);
        }

        return $next($request);
    }
}
