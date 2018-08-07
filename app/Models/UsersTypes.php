<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UsersTypes extends Model
{
    /**
     * Table.
     *
     * @var string
     */
    protected $table = 'users_type';

    /**
     * Get all user types
     * @return array
     */
    public function getAllUserTypes()
    {
        return self::all()->toArray();
    }

    /**
     * Join user_types with users
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany('App\User', 'join_users_user_types', 'user_type', 'user_id');
    }
}
