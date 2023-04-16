<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Config\Repository as Config;

class SetSessionTimeout
{
    protected $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function handle($request, Closure $next)
    {
        $route = $request->route();
        if ($route !== null && ($route->getName() === 'login' || $route->getName() === 'password.request' || $route->getName() === 'password.email' || $route->getName() === 'password.reset')) {
            $this->config->set('session.lifetime', 2147483647);
        
        
        } else {
            $this->config->set('session.lifetime', config('session.lifetime')); // set the default session lifetime for all other routes
        }
    
        return $next($request);
    }
}
