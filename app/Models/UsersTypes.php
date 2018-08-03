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
}
