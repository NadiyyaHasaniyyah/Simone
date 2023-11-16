<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isMahasiswa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::guard('mhs')->check() || Auth::guard('mhs')->user()->role !== 'mahasiswa') {
            //abort(403);
            return response()->view('forbidden',[],403);
        }

        return $next($request);
    }
}
