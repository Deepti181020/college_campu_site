<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    protected function redirectTo($request): ?string
    {
        return $request->expectsJson()? null : route('admin.login');
    }
    protected function authenticate($resquest,array $guards)
    {
        if($this->auth->guard('admin')->check()){
            return $this->auth->shouldUse('admin');
        }
        $this->unauthenticated($request,['admin']);
    }
}
