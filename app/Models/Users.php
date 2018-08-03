<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Models\Join_Users_UserTypes;
use Illuminate\Support\Facades\Hash;

class Users extends Model
{
    /**
     * Table.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'surname', 'login', 'avatar_path', 'user_type'
    ];

    /**
     * Update or create user info
     * @param $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateOrCreate($arRequest)
    {
        echo "<pre>";
        print_r($arRequest);
        die();
        foreach ($arRequest['id'] as $key => $id)
        {
            try {
                if (!empty($arRequest['login'][$key]))
                {
                    $user = self::updateOrCreate(
                        ['id' => $id],
                        [
                            'name' => $arRequest['name'][$key],
                            'surname' => $arRequest['surname'][$key],
                            'login' => $arRequest['login'][$key],
                            'email' => $arRequest['email'][$key],
                            'password' => Hash::make($arRequest['password'][$key])
                        ]
                    );
                }
                else
                {
                    Join_Users_UserTypes::where('user_id', $id)->delete();
                }

                foreach ($arRequest['type'] as $key => $arTypes)
                {
                    if ($key == $id)
                    {
                        foreach ($arTypes as $type)
                        {
                            Join_Users_UserTypes::updateOrCreate(
                                ['user_id' => !empty($user->id) ? $user->id : $id, 'user_type' => $type],
                                [
                                    'user_id' => !empty($user->id) ? $user->id : $id,
                                    'user_type' => $type
                                ]
                            );
                        }
                    }
                }
            } catch (Exception $e) {
                return redirect()->route('admin.menu')->withErrors($e->getMessage());
            }
        }
    }

    /**
     * Delete user
     * @param $request
     * @return bool|int|null
     */
    public function deleteUser($request)
    {
        if ($request->id)
        {
            Join_Users_UserTypes::where('user_id', $request->id)->delete();
            $result = self::destroy($request->id);
            return $result;
        }
    }

    /**
     * Get all users
     * @return array
     */
    public function getAllUsersInfo()
    {
        return self::with('getUserTypes.userType')->get()->toArray();
    }
}
