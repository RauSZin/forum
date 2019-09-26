<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        	'name' => 'Raul',
        	'email' => 'raul.ifsp@gmail.com',
        	'password' => '123123123',
        ];
        DB::table('users')->insert($users);
    }
}
