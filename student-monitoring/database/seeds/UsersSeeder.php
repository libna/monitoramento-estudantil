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
        		'password'	=> 'libna123'

        	]);

               DB::table('users')->insert([
                'id'        => 2,
                'name'      => 'Geovane',
                'matricula' => '20181infig0337',
                'email'     => 'geovanejose240899@gmail.com',
                'password'  => 'geovane123'
                 ]);   


               DB::table('users')->insert([
                'id'        => 3,
                'name'      => 'Wolaci',
                'matricula' => '20181infig0077',
                'email'     => 'wolacijose8@gmail.com',
                'password'  => 'wolaci123'
                 ]);   
    }
}
