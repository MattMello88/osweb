<?php

namespace App\Http\Middleware;

use Closure;

class OsAuthenticate
{
  public function handle($request, Closure $next)
  {
      dd(session()->all());
      if (!session('token')) {
        session()->flush();
        session()->invalidate();
        return redirect('/');
      }

      return $next($request);
  }
}
