@extends('layouts.app')

@section('content')
@if(Auth::user()->siape == null)
    <div class="container">
      <div class="row justify-content-center">
  @foreach($formulario as $form)

    <div class="card mr-2 mb-2" style="width: 18rem;">
       <div class="card-header">{{$form->titulo}}</div>
        <img src="{{asset('img/form-icon-2.png')}}" alt="Ícone de Formulário" class="card-img-top" style="padding: 10px;">
        <div class="card-body">
           <p class="card-text">Neste campo você responderá perguntas de acordo com o tipo de usuário que você é: Aluno ou Egresso</p>
            <a href="{{route('form', $form->id)}}" class="btn btn-primary">Entrar</a>
        </div>
    </div>
  @endforeach
@endif

@if(Auth::user()->matricula == null)
<div class="container">
      @foreach($formulario as $form)

<!--     <div class="card mr-2 mb-2" style="width: 18rem;">
       <div class="card-header">{{$form->titulo}}</div>
        <img src="{{asset('img/form-icon-2.png')}}" alt="Ícone de Formulário" class="card-img-top" style="padding: 10px;">
        <div class="card-body">
           <p class="card-text">Neste campo você responderá perguntas de acordo com o tipo de usuário que você é: Aluno ou Egresso</p>
            <a href="{{route('form', $form->id)}}" class="btn btn-primary">Entrar</a>
        </div>
    </div> -->
  @endforeach
  <div class="container">
    <div class="row justify-content-center">
     <div class="card mr-2 mb-2" style="width: 18rem;">
       <div class="card-header">Novo Formulário</div>
        <img src="{{asset('img/logomais.png')}}" alt="Ícone de Criação de Novo Formulário" class="card-img-top" style="padding: 10px;">
        <div class="card-body">
           <p class="card-text">Aqui você poderá criar um novo formulário que será destinado aos alunos.</p>
            <a href="/index" class="btn btn-primary">Entrar</a>
        </div>
    </div>



    <div class="row justify-content-center">
      <div class="card ml-3 mb-2" style="width: 18rem;">
       <div class="card-header">Visualizar Formulários</div>
        <img src="{{asset('img/visu2.png')}}" alt="Ícone de Formulário" class="card-img-top" style="padding: 10px;">
        <div class="card-body">
           <p class="card-text">Neste campo você terá acesso a todos os formulários que você criou e que foram enviados aos alunos.</p>
            <a href="{{ route('visu') }}" class="btn btn-primary">Entrar</a>
        </div>
    </div>

</div>
@endif
@endsection
