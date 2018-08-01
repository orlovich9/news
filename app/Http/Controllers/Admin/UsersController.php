<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Models\UsersTypes;
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
        $arUsers = User::with('getUserTypes.userType')->get()->toArray();
        $arUserTypes = UsersTypes::all()->toArray();

        return view('admin.users', ['arUsers' => $arUsers, 'arUserTypes' => $arUserTypes]);
    }
}
