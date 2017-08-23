<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Hash;

class CheckAdmin
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
        $login = $request->get('X-UserName');
        $pass = $request->get('X-Password');

        if($login != config('admin.login')){
            abort(401, 'unauthorized');
        }

        if(!Hash::check($pass, config('admin.password'))){
            abort(401, 'unauthorized');
        }

        return $next($request);
    }
}
