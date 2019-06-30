@extends('layouts.app')

@section('content')

@if(Auth::user()->matricula == null)
<div class="container">
      @foreach($formulario as $form)

	    <div class="card mr-2 mb-2" style="width: 18rem;">
	       <div class="card-header">{{$form->titulo}}</div>
	        <img src="{{asset('img/form-icon-2.png')}}" alt="Ícone de Formulário" class="card-img-top" style="padding: 10px;">
	        <div class="card-body">
	           <p class="card-text">Neste campo você responderá perguntas de acordo com o tipo de usuário que você é: Aluno ou Egresso</p>
	            <a href="{{route('form', $form->id)}}" class="btn btn-primary">Entrar</a>
	            <a href="" class="btn btn-primary" >Ver Respostas</a>
	        </div>
	    </div>
	  @endforeach


@endif
@endsection	