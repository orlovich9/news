<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class IsAuth
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
        if (!Auth::check() || Auth::user()->user_type != $this->getAdminUserType())
        {
            return response(view('admin.login'));
        }

        return $next($request);
    }

    /**
     * Get user type for success login in admin folder
     * @return int
     */
    public function getAdminUserType()
    {
        return 3;
    }
}
