<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    /**
     * Display Users List.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.index');
    }
}
