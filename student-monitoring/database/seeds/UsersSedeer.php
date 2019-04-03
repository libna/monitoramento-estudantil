<?php

use Illuminate\Database\Seeder;

class UsersSedeer extends Seeder
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
    		'name'		=> 'libna',
    		'email'     =>  'libna@gmail.com',
    		'matricula' =>'00',
    		'password'  => 'libna123'
    	]);
    
    }
}
