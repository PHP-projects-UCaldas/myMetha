<?php

namespace App\Http\Middleware;

use App\Models\Logger;
use App\Models\Observer;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    private $observer;

    public function __construct()
    {
        $this->observer = new Observer();
        $this->observer->attach(new Logger());
    }
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            $this->observer->notify('users:logInError', $request->error_log());
            return route('login');
        }
    }
}
