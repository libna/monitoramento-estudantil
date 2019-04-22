<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    protected $table    = 'respostas';

    protected $fillable = [
    	'id','respostas','perguntas_id','users_id'
    ];
}
