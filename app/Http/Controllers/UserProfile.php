<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserProfile extends Controller
{

    /**
     * Show user profile
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->get();

        $arUserInfo = [
            "name" => $user->first()->name,
            "surname" => $user->first()->surname,
            "login" => $user->first()->login,
            "avatar" => asset('public/storage/'.$user->first()->avatar_path),
            "email" => $user->first()->email
        ];

        return view('profile', ['user_info' => $arUserInfo]);
    }

    /**
     * Update profile data
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return 1;
//        return view('profile');
    }

}
