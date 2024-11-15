<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HandleCors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Menambahkan header CORS
        return $next($request)
            ->header('Access-Control-Allow-Origin', '*')  // Mengizinkan semua origin
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')  // Metode yang diizinkan
            ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');  // Header yang diizinkan
    }
}
