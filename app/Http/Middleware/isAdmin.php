<?php namespace App\Http\Middleware;

use Closure;

class Admin {

  public function handle($request, Closure $next)
  {
      if(Auth::check() && Auth::user()->is_admin() )
      {
        return $next($request);

      }
        return redirect ('index');
  }

}
