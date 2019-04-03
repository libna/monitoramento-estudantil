<?php

use Illuminate\Database\Seeder;

class TipoDePerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_de_perguntas')->insert([
    		'id'=> 1,
    		'tipo'=> 'aberta'
    	]);
    }
}
