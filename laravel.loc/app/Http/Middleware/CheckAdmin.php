<?php

namespace App\Http\Middleware;

use Closure;

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
        $password = bcrypt($pass);
        if($login == config('admin.login')){
            if($password == config('admin.password')){

            }
        } else {
            return response()->setStatusCode(401, 'unauthorized');
        }

        return $next($request);
    }
}
