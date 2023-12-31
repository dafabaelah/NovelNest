<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
        public function handle(Request $request, Closure $next, ...$roles)
        {
            $user = Auth::user();

            if (!$user) {
                return redirect('login');
            }

            // if (! $request->user() || ! $request->user()->hasRole($roles)) {
            //     // Jika pengguna tidak memiliki peran yang diizinkan
            //     abort(403, 'Unauthorized action.');
            // }

            foreach ($roles as $role) {
                if ($request->user()->hasRole($role)) {
                    return $next($request);
                }
            }
            return redirect('/')->with('error', 'Unauthorized access.');

            // return $next($request);
        }
    // public function handle($request, Closure $next, $role)
    // {
    //     $user = auth()->user();

    //     if ($user && $user->role == $role) {
    //         return $next($request);
    //     }

    //     abort(403, 'Unauthorized.');
    // }


}
