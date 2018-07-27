<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

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
        $user_types = User::where('id',Auth::id())->first()->getUserTypes;
        $arUserTypes = [];

        foreach ($user_types as $type)
        {
            $arUserTypes[] = $type->user_type;
        }

        if (!Auth::check() || !in_array($this->getAdminUserType(), $arUserTypes))
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
