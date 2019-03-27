<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerForm extends Controller
{
    public function criarForm(){
    	return view('formulario');
    }
}
