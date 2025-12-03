<?php

namespace App\Http\Middleware;

use App\Models\Level;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LevelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$levels): Response
    {
        if (!Auth::check()) {
            return redirect('/');
        }
        
        $levelName = Level::find(Auth::user()->level_id)->name ?? null;

        if (!$levelName || !in_array($levelName, $levels)) {
            abort(403, 'Anda Tidak Memiliki Akses');
        }        
        
        return $next($request);
    }
}
