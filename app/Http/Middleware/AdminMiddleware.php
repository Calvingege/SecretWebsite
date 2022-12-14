<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

// krn dri td gajalan fitur atuthentikasinya jadi kita bisa 
// 1. Clear chache -> php artisan cache:clear 
// 2. clear route -> php artisan route:clear

class AdminMiddleware
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
        // echo "anything"; die(); // ga muncul apa2 artinya middlewarnya ga kehubung. 
        if ($request->user()->role == User::ROLE_ADMIN) {
        return $next($request);
        }
        abort(401);
    }
}
