<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerForm extends Controller
{
    public function create(){
    	return view('formulario');
    }
    public function store(){
    	//
    }
}
