<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isDosenWali
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('dsn')->check() || Auth::guard('dsn')->user()->role !== 'dosenwali') {
            //abort(403);
            return response()->view('forbidden',[],403);
        }

        return $next($request);
    }
}
