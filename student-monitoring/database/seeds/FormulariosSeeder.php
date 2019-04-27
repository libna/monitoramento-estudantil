<?php

use Illuminate\Database\Seeder;

class FormulariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
        public function run()
        {
        	DB::table('formularios')->insert([
        		'id'=> 1,
        		'titulo'=> 'Formulário de Entrada'
        	]);
            DB::table('formularios')->insert([
                'id'=> 2,
                'titulo'=> 'Formulário de Saída'
            ]);
        }
    }
