<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pergunta extends Model
{

	protected $table = 'perguntas';

	protected $fillable = [
    'titulo', 'form_id', 'tipo_de_pergunta_id',
  ];
}
