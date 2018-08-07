<?php

namespace App;

use App\Models\UsersTypes;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'surname', 'login', 'avatar_path', 'user_type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Join users with user_types
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function getUserTypes()
    {
        return $this->belongsToMany('App\Models\UsersTypes', 'join_users_user_types', 'user_id', 'user_type');
    }

    /**
     * Update or create user info
     * @param $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateOrCreate($arRequest)
    {
        foreach ($arRequest['id'] as $key => $id) {
            if (!empty($arRequest['login'][$key])) {
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

            foreach ($arRequest['type'] as $key => $arTypes) {
                if ($key == $id) {
                    $user = self::find(!empty($user->id) ? $user->id : $id);
                    $user->getUserTypes()->sync($arTypes);
                }
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
        if ($request->id) {
            $result = self::destroy($request->id);

            return $result;
        }
    }

    /**
     * Get all users info
     * @return array
     */
    public function getAllUsersInfo()
    {
        $users = self::all();
        $arUsers = [];

        foreach ($users as $user) {
            $arUserTypes = $user->getUserTypes;
            if (!$arUserTypes->isEmpty()) {
                foreach ($arUserTypes as $type) {
                    if (!array_key_exists($type->pivot->pivotParent->id, $arUsers)) {
                        $arUsers[$type->pivot->pivotParent->id]['name'] = $type->pivot->pivotParent->name;
                        $arUsers[$type->pivot->pivotParent->id]['surname'] = $type->pivot->pivotParent->surname;
                        $arUsers[$type->pivot->pivotParent->id]['login'] = $type->pivot->pivotParent->login;
                        $arUsers[$type->pivot->pivotParent->id]['email'] = $type->pivot->pivotParent->email;
                    }

                    $arUsers[$type->pivot->pivotParent->id]['get_user_types'][]['user_type'] = $type->type_name;

                }
            } else {
                $arUsers[$user->id]['name'] = $user->name;
                $arUsers[$user->id]['surname'] = $user->surname;
                $arUsers[$user->id]['login'] = $user->login;
                $arUsers[$user->id]['email'] = $user->email;
                $arUsers[$user->id]['get_user_types'][]['user_type'] = false;
            }
        }

        return $arUsers;
    }
}
