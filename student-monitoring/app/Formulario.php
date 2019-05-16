<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulario extends Model
{
	protected $table = 'formularios';
  	protected $fillable = [
    'titulo'
  	];

  	public function perguntas(){
  		return $this->hasMany('App\Pergunta', 'form_id');
  	}
}
