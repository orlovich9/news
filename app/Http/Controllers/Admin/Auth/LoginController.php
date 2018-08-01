<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Show authorization form
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    /*public function show()
    {
        var_dump(312);
        die();
        return view('admin.login');
    }*/
}
