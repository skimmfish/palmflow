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
 if ($request->user()->is_admin == true && $request->user()->active==1){
        return $next($request);
		}else{

      return redirect()->route('home')->with('title','You are not permitted to view this page!');

    }
	}

	}

}
