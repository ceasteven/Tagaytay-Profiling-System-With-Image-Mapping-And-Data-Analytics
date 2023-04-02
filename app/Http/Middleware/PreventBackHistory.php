<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class PreventBackHistory
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
        $headers = [
            'Cache-Control' => 'no-cache, no-store, must-revalidate, max-age=0',
            'X-Content-Type-Options' => 'nosniff',
        ];

        // Add security headers for static resources
        if (strpos($request->getRequestUri(), '/public/') !== false) {
            $headers += [
                'Cache-Control' => 'public, max-age=31536000, immutable',
            ];
        }

        $response = $next($request);
        foreach ($headers as $key => $value) {
            $response->headers->set($key, $value);
        }

        return $response;
    }
}
