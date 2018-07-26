<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Profile;
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
            "avatar" => $user->first()->avatar_path ? asset('public/storage/'.$user->first()->avatar_path) : '',
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
    public function update(Profile $request, $id)
    {
        $arUpdateData = [];

        if ($request->name)
        {
            $arUpdateData['name'] = $request->name;
        }

        if ($request->surname)
        {
            $arUpdateData['surname'] = $request->surname;
        }

        if ($request->login)
        {
            $arUpdateData['login'] = $request->login;
        }

        if ($request->email)
        {
            $arUpdateData['email'] = $request->email;
        }

        if ($request->avatar)
        {
            $arUpdateData['avatar_path'] = $request->avatar->store('uploads/avatar', 'public');
        }

        return User::where('id', $id)->update($arUpdateData);

    }

}
