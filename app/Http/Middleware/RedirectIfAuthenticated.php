<?php

namespace App\Http\Middleware;

use App\Models\Logger;
use App\Models\Observer;
use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    private $observer;

    public function __construct() {
        $this->observer = new Observer();
        $this->observer->attach(new Logger());
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;
        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                $this->observer->notify('users:logged', Auth::user());
                return redirect('/');
            }
        }

        return $next($request);
    }
}
