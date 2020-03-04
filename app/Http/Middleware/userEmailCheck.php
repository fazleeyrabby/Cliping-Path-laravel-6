<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class userEmailCheck
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

        if (Auth::check()) {
            if ( Auth::user()->is_email_ver != 0) {
                
                return $next($request);
            }else{
                return redirect(route('auth.emailVer'));
            }
        
        }
        
    }
}
