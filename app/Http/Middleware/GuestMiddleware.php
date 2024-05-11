<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Periksa apakah pengguna sudah masuk atau belum
        if (Auth::check()) {
            // Jika pengguna sudah masuk, arahkan mereka ke rute yang sesuai setelah login
            return redirect('/'); // Ganti '/home' dengan rute yang sesuai
        }

        // Jika pengguna belum masuk, lanjutkan ke halaman utama
        return $next($request);
    }
}
