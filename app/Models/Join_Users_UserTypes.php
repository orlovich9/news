<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Join_Users_UserTypes extends Model
{
    /**
     * Table.
     *
     * @var string
     */
    protected $table = 'join_users_user_types';

    /**
     * Get user type
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userType()
    {
        return $this->belongsTo('App\Models\UsersTypes', 'user_type');
    }
}
