<?php

namespace App\Http\Middleware;

use Closure;

class Traders
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
            if ($request->user()->designation == 'trader'){
                   return $next($request);
                   }
               }else{
           //return new RedirectResponse(url('/login'));
           return redirect()->route('login')->with('message','You are not authorized to view this page!');
               }
    }
}
