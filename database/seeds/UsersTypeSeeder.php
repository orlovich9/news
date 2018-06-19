<?php

use Illuminate\Database\Seeder;

class UsersTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users_type')->delete();
        DB::table('users_type')->insert([
           'id' => 1,
	      'type_name' => 'Администратор',
	      'type_id' => 1,
	      'created_at' => date("Y-m-d H:i:s")
	    ]);
	     DB::table('users_type')->insert([
	     	'id' => 2,
	      'type_name' => 'Контент менеджер',
	      'type_id' => 2,
	      'created_at' => date("Y-m-d H:i:s")
	    ]);
	      DB::table('users_type')->insert([
	      	'id' => 3,
	      'type_name' => 'Зарегистрированные пользователи',
	      'type_id' => 3,
	      'created_at' => date("Y-m-d H:i:s")
	    ]);
    }
}
