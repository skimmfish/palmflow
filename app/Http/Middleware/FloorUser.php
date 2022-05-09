<?php

namespace App\Http\Middleware;

use Closure;

class FloorUser
{
    /**
     * Handle an incoming request.
     * Redirects a user to the appropriate dashboard
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->user())
        {
        if ($request->user()->is_admin == false){
               return $next($request);
               }else{
       return redirect()->route('admin.dashboard.core-admin.index')->with('message','You are not authorized to view this page!');
}
}
}
}
