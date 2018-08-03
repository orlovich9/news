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
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'user_type'
    ];

    public $timestamps = false;

    /**
     * Get user type
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function userType()
    {
        return $this->belongsTo('App\Models\UsersTypes', 'user_type');
    }
}
