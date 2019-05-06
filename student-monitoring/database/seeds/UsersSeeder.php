<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        		'id'		=> 1,
        		'name'		=> 'Libna',
        		'matricula' => '20181infig0166',
        		'email'		=> 'libnarodrigues723@gmail.com',
        		'password'	=> md5('libna123')
        	]);
    }
}
