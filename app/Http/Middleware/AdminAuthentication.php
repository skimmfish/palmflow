<?php

namespace App\Http\Middleware;
use Illuminate\Http\RedirectResponse;

use Closure;

class AdminAuthentication
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
		
		if ($request->user())
 {
 if ($request->user()->is_admin == true)
 {
        return $next($request);
    }
}
//return new RedirectResponse(url('/login'));
return redirect()->route('login')->with('message','You are not authorized to view that page');

	}
	}
