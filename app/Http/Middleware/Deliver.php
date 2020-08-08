<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Deliver
{
    
    public function handle($request, Closure $next)
    {
        if (Auth::user() && Auth::user()->role == 'deliver' ) {
            
            return $next($request);
        }else {
            return redirect()->to('system');
        }
    }
}