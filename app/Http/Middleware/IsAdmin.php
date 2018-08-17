<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class IsAdmin
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
        if (!Auth::check()) {
            return response(view('admin.login'));
        }

        $userTypes = User::where('id',Auth::id())->first()->getUserTypes;
        $arUserTypes = [];

        foreach ($userTypes as $type) {
            $arUserTypes[] = $type->slug;
        }

        if (!in_array('admin', $arUserTypes)) {
            return redirect()->route('main');
        }

        return $next($request);
    }
}
