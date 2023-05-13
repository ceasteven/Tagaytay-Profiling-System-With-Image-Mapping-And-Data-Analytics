<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Config\Repository as Config;
use Illuminate\Session\Store;

class SetSessionTimeout
{
    protected $config;
    protected $session;

    public function __construct(Config $config, Store $session)
    {
        $this->config = $config;
        $this->session = $session;
    }

    public function handle($request, Closure $next)
    {
        $route = $request->route();
        if ($route !== null && ($route->getName() === 'login' || $route->getName() === 'password.request' || $route->getName() === 'password.email' || $route->getName() === 'password.reset')) {
            $this->config->set('session.lifetime', 2147483647);
        } 
        
            elseif ($route !== null && ($route->getName() === 'residents.create' ||$route->getName() === 'households.create' ||$route->getName() === 'users.create')) {
                $this->config->set('session.lifetime', 120);
            
        }
        else {
            $this->config->set('session.lifetime', config('session.lifetime')); // set the default session lifetime for all other routes
            $this->session->put('last_activity', time()); // set the last activity time
        }

        if (time() - $this->session->get('last_activity') > $this->config->get('session.lifetime')) {
            $this->session->flush(); // clear the session data
            return redirect()->route('login')->with('error', 'Your session expired due to inactivity. Please login again.');
        }

        $this->session->put('last_activity', time()); // refresh the last activity time

        return $next($request);
    }
}
