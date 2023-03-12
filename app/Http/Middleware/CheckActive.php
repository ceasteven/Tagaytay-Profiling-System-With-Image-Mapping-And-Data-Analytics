<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CheckActive
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
        if(auth()->check() && (auth()->user()->status == 0)){
                Auth::logout();
    
                $request->session()->invalidate();
    
                $request->session()->regenerateToken();
    
                return redirect()->route('login')->with('error', 'Your Account is inactive, please contact System Admin.');
    
        }
    
        return $next($request);
    }
}
