<?php

use Illuminate\Database\Seeder;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('perguntas')->insert(
    		[
    		  	'id'                 => 1,
    			'titulo' 			 => 'nome completo',
    			'form_id'			 => 1,
    			'tipo_de_pergunta_id'=> 1

    		
    	]);
    	DB::table('perguntas')->insert([
    		
    			'id'	 			 => 2,
    			'titulo' 			 => 'RG',
    			'form_id'			 => 1,
    			'tipo_de_pergunta_id'=> 1
    		]);
    	DB::table('perguntas')->insert([
    		
    			'id'	 			 => 3,
    			'titulo' 			 => 'nome completo',
    			'form_id'			 => 1,
    			'tipo_de_pergunta_id'=> 1
    		]);
    	DB::table('perguntas')->insert([
    		
    			'id'	 			 => 4,
    			'titulo' 			 => 'CPF',
    			'form_id'			 => 1,
    			'tipo_de_pergunta_id'=> 1
    		]);
    	DB::table('perguntas')->insert([
    		
    			'id'	 			 => 5,
    			'titulo' 			 => 'CEP',
    			'form_id'			 => 1,
    			'tipo_de_pergunta_id'=> 1
    		]);
    	DB::table('perguntas')->insert([
    		
    			'id'	 			 => 6,
    			'titulo' 			 => 'O que você está cursando no IFPE campus Igarassu?',
    			'form_id'			 => 1,
    			'tipo_de_pergunta_id'=> 1
    		]);
    		DB::table('perguntas')->insert([
    			'id'	 			 => 7,
    			'titulo' 			 => 'Quantidade de Períodos do Curso:',
    			'form_id'			 => 1,
    			'tipo_de_pergunta_id'=> 1
    		]);
    		DB::table('perguntas')->insert([
    			'id'	 			 => 8,
    			'titulo' 			 => 'Expectativas para o curso?',
    			'form_id'			 => 1,
    			'tipo_de_pergunta_id'=> 1
    		]);
    		DB::table('perguntas')->insert([
    			'id'	 			 => 9,
    			'titulo' 			 => 'Qual sua primeira impressão sobre o campus Igarassu?',
    			'form_id'			 => 1,
    			'tipo_de_pergunta_id'=> 1
    		]);
    		DB::table('perguntas')->insert([
    			'id'	 			 => 10,
    			'titulo' 			 => 'Estado civil?',
    			'form_id'			 => 1,
    			'tipo_de_pergunta_id'=> 1
    		]);
    		DB::table('perguntas')->insert([
    			'id'	 			 => 11,
    			'titulo' 			 => 'Quais eram suas disciplinas favoritas no ensino médio',
    			'form_id'			 => 1,
    			'tipo_de_pergunta_id'=> 1
    		]);
    		DB::table('perguntas')->insert([
    			'id'	 			 => 12,
    			'titulo' 			 => 'Você veio de escola pública ou privada?',
    			'form_id'			 => 1,
    			'tipo_de_pergunta_id'=> 1
    		]);
    		DB::table('perguntas')->insert([
    			'id'	 			 => 13,
    			'titulo' 			 => 'Você mora com seus pais ou algum familiar?',
    			'form_id'			 => 1,
    			'tipo_de_pergunta_id'=> 1
    		]);
    		DB::table('perguntas')->insert([
    			'id'	 			 => 14,
    			'titulo' 			 => 'Você teve muitas dificuldades ao fazer o vestibular?',
    			'form_id'			 => 1,
    			'tipo_de_pergunta_id'=> 1
    		]);
    		DB::table('perguntas')->insert([
    			'id'	 			 => 15,
    			'titulo' 			 => 'Como ficou sabendo sobre esse curso?',
    			'form_id'			 => 1,
    			'tipo_de_pergunta_id'=> 1
    		]);
    		DB::table('perguntas')->insert([
    			'id'	 			 => 16,
    			'titulo' 			 => 'Como você se vê daqui a um ano e seis meses?',
    			'form_id'			 => 1,
    			'tipo_de_pergunta_id'=> 1
    		]);

    	
    }

}
