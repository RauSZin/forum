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
        	'type' => 'admin',
        	'name' => 'Raul',
        	'email' => 'raul.ifsp@gmail.com',
        	'password' => '123123123',
        	'nickname' => 'programetor',
        ];
        DB::table('users')->insert($users);
    }
}
