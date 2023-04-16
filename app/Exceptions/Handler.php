<?php

namespace App\Exceptions;



use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Session\TokenMismatchException;

use Illuminate\Session\TokenExpiredException;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Illuminate\Auth\AuthenticationException;

class Handler extends ExceptionHandler
{
    // ...

    public function register()
    {
        $this->renderable(function (TokenMismatchException $e, $request) {
    
            return redirect('login')->with('error', 'Your session expired due to inactivity. Please login again.');
            
        });
   
        $this->renderable(function (HttpException $e, $request) {
            if ($e->getStatusCode() == 419) {
                return redirect('login')->with('error', 'Your session expired due to inactivity. Please login again.');
            }
        });

    $this->renderable(function (AuthenticationException $e, $request) {
   
            return redirect()->route('login')->with('error', 'Your session expired due to inactivity. Please login again.');
    
    });
    }

}

