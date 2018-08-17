<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class UsersTypes extends Model
{
    use Sluggable;
    /**
	* Table.
	*
	* @var string
	*/
    protected $table = 'users_type';

    /**
	* Return the sluggable configuration array for this model.
	*
	* @return array
	*/
    public function sluggable()
    {
	   return [ 'slug' => [ 'source' => 'type_name' ]];
    }

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
