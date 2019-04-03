<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionarIdDoUsuarioEIdPerguntaATabelaResposta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('respostas', function (Blueprint $table) {

            $table->Integer('perguntas_id')->unsigned();
            $table->foreign('perguntas_id')->references('id')->on('perguntas');

            $table->Integer('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('respostas', function (Blueprint $table) {
            
            $table->dropForeign(['perguntas_id']);
            $table->dropColumn(['perguntas_id']);

            $table->dropForeign(['users_id']);
            $table->dropColumn(['users_id']);
        });
    }
}
