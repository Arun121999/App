<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->auth = 
        auth()->user() ? (auth()->user()->role === 'admin')
        :false;

        if(this->auth === true)
            return $next($request);
        return redirect()->route('lofin')->with('errors','Access denied. Login to continue');
    }
}
