<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionarIdDoTipoDaPerguntaParaPerguntas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perguntas', function (Blueprint $table) {
            $table->Integer('tipo_de_pergunta_id')->unsigned();
            $table->foreign('tipo_de_pergunta_id')->references('id')->on('tipo_de_perguntas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perguntas', function (Blueprint $table) {
            $table->dropForeign(['tipo_de_pergunta_id']);
            $table->dropColumn(['tipo_de_pergunta_id']);
        });
    }
}
