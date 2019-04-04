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
    	// DB::table('perguntas')->insert([
    		
    	// 		'id'	 			 => 1,
    	// 		'titulo' 			 => 'RG',
    	// 		'form_id'			 => 1,
    	// 		'tipo_de_pergunta_id'=> 1
    	// 	]);
    	// DB::table('perguntas')->insert([
    		
    	// 		'id'	 			 => 1,
    	// 		'titulo' 			 => 'nome completo',
    	// 		'form_id'			 => 1,
    	// 		'tipo_de_pergunta_id'=> 1
    	// 	]);
    	// DB::table('perguntas')->insert([
    		
    	// 		'id'	 			 => 1,
    	// 		'titulo' 			 => 'CPF',
    	// 		'form_id'			 => 1,
    	// 		'tipo_de_pergunta_id'=> 1
    	// 	]);
    	// DB::table('perguntas')->insert([
    		
    	// 		'id'	 			 => 1,
    	// 		'titulo' 			 => 'CEP',
    	// 		'form_id'			 => 1,
    	// 		'tipo_de_pergunta_id'=> 1
    	// 	]);
    	// DB::table('perguntas')->insert([
    		
    	// 		'id'	 			 => 1,
    	// 		'titulo' 			 => 'O que você está cursando no IFPE campus Igarassu?',
    	// 		'form_id'			 => 1,
    	// 		'tipo_de_pergunta_id'=> 1
    	// 	]);
    	// 	DB::table('perguntas')->insert([
    	// 		'id'	 			 => 1,
    	// 		'titulo' 			 => 'Quantidade de Períodos do Curso:',
    	// 		'form_id'			 => 1,
    	// 		'tipo_de_pergunta_id'=> 1
    	// 	]);
    	// 	DB::table('perguntas')->insert([
    	// 		'id'	 			 => 1,
    	// 		'titulo' 			 => 'Expectativas para o curso?',
    	// 		'form_id'			 => 1,
    	// 		'tipo_de_pergunta_id'=> 1
    	// 	]);
    	// 	DB::table('perguntas')->insert([
    	// 		'id'	 			 => 1,
    	// 		'titulo' 			 => 'Qual sua primeira impressão sobre o campus Igarassu?',
    	// 		'form_id'			 => 1,
    	// 		'tipo_de_pergunta_id'=> 1
    	// 	]);
    	// 	DB::table('perguntas')->insert([
    	// 		'id'	 			 => 1,
    	// 		'titulo' 			 => 'Estado civil?',
    	// 		'form_id'			 => 1,
    	// 		'tipo_de_pergunta_id'=> 1
    	// 	]);
    	// 	DB::table('perguntas')->insert([
    	// 		'id'	 			 => 1,
    	// 		'titulo' 			 => 'Quais eram suas disciplinas favoritas no ensino médio',
    	// 		'form_id'			 => 1,
    	// 		'tipo_de_pergunta_id'=> 1
    	// 	]);
    	// 	DB::table('perguntas')->insert([
    	// 		'id'	 			 => 1,
    	// 		'titulo' 			 => 'Você veio de escola pública ou privada?',
    	// 		'form_id'			 => 1,
    	// 		'tipo_de_pergunta_id'=> 1
    	// 	]);
    	// 	DB::table('perguntas')->insert([
    	// 		'id'	 			 => 1,
    	// 		'titulo' 			 => 'Você mora com seus pais ou algum familiar?',
    	// 		'form_id'			 => 1,
    	// 		'tipo_de_pergunta_id'=> 1
    	// 	]);
    	// 	DB::table('perguntas')->insert([
    	// 		'id'	 			 => 1,
    	// 		'titulo' 			 => 'Você teve muitas dificuldades ao fazer o vestibular?',
    	// 		'form_id'			 => 1,
    	// 		'tipo_de_pergunta_id'=> 1
    	// 	]);
    	// 	DB::table('perguntas')->insert([
    	// 		'id'	 			 => 1,
    	// 		'titulo' 			 => 'Como ficou sabendo sobre esse curso?',
    	// 		'form_id'			 => 1,
    	// 		'tipo_de_pergunta_id'=> 1
    	// 	]);
    	// 	DB::table('perguntas')->insert([
    	// 		'id'	 			 => 1,
    	// 		'titulo' 			 => 'Como você se vê daqui a um ano e seis meses?',
    	// 		'form_id'			 => 1,
    	// 		'tipo_de_pergunta_id'=> 1
    	// 	]);

    	
    }

}
