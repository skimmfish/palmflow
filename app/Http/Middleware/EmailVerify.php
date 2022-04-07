<?php

namespace App\Http\Middleware;

use Closure;

class EmailVerify
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
        //return $next($request);
    
	
			if ($request->user())
 {
 if ($request->user()->email_verified_at != NULL){
        return $next($request);
		}
	}
//return new RedirectResponse(url('/login'));
return redirect()->route('login')->with('message','You are not authorized to view this page!');

	
	
	}
}
