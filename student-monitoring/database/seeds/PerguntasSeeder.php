<?php

use Illuminate\Database\Seeder;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     //****Perguntas de formulário de entrada**
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
    			'titulo' 			 => 'Com o que seus pais trabalham?',
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
            //PERGUNTAS DO FORMULÁRIO DE SAÍDA



        DB::table('perguntas')->insert(
            [
                'id'                 => 17,
                'titulo'             => 'noaaaa',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1

            
        ]);
        DB::table('perguntas')->insert([
            
                'id'                 => 18,
                'titulo'             => 'CPF',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);
        DB::table('perguntas')->insert([
            
                'id'                 => 19,
                'titulo'             => 'RG',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);
        DB::table('perguntas')->insert([
            
                'id'                 => 20,
                'titulo'             => 'Com o que seus pais trabalham',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);
        DB::table('perguntas')->insert([
            
                'id'                 => 21,
                'titulo'             => 'CEP',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);
       DB::table('perguntas')->insert([
            
                'id'                 => 22,
                'titulo'             => 'O que você cursou no IFPE campus Igarassu?',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);
       DB::table('perguntas')->insert([
            
                'id'                 => 23,
                'titulo'             => 'Quantidade de Períodos do Curso:',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);
       DB::table('perguntas')->insert([
            
                'id'                 => 24,
                'titulo'             => 'O que você achou do seu curso?',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);       
       DB::table('perguntas')->insert([
            
                'id'                 => 25,
                'titulo'             => 'Como foi sua experiência aqui no curso?',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);
        DB::table('perguntas')->insert([
            
                'id'                 => 26,
                'titulo'             => 'Estado civil?',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);
       DB::table('perguntas')->insert([
            
                'id'                 => 27,
                'titulo'             => 'Quais eram suas disciplinas favoritas no curso?',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);
       DB::table('perguntas')->insert([
            
                'id'                 => 28,
                'titulo'             => 'Conte-nos como foi sua experiência aqui no campus:',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);
       DB::table('perguntas')->insert([
            
                'id'                 => 29,
                'titulo'             => 'Você está fazendo algum curso no campus Igarassu?',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);
        DB::table('perguntas')->insert([
            
                'id'                 => 30,
                'titulo'             => 'Você conseguiu algum estágio enquanto estava cursando?',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);
        DB::table('perguntas')->insert([
            
                'id'                 => 31,
                'titulo'             => 'Você pretende fazer algum curso com relação a sua Área?',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);
        DB::table('perguntas')->insert([
            
                'id'                 => 32,
                'titulo'             => 'Como você se vê daqui a 3 anos?',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);
        DB::table('perguntas')->insert([
            
                'id'                 => 33,
                'titulo'             => 'Você trabalha na Área?',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);
        DB::table('perguntas')->insert([
            
                'id'                 => 34,
                'titulo'             => 'Você está cursando em algum outro campus?',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);
        DB::table('perguntas')->insert([
            
                'id'                 => 35,
                'titulo'             => 'Você está cursando algum outro curso aqui no campus Igarassu?',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);
        DB::table('perguntas')->insert([
            
                'id'                 => 36,
                'titulo'             => 'Quais perguntas você acha que devemos adicionar no formulário?',
                'form_id'            => 2,
                'tipo_de_pergunta_id'=> 1
            ]);




    }

}
