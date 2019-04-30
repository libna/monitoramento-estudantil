@extends('layouts.app')

@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Questionário #1</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                     <div class="container">
    <form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Nome Completo:</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Exemplo: José da Silva">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">CPF</label>
    <input type="text" class="form-control" id="exampleFormControlInput1">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">RG</label>
    <input type="text" class="form-control" id="exampleFormControlInput1">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">CEP</label>
    <input type="text" class="form-control" id="exampleFormControlInput1">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">CEP</label>
    <input type="text" class="form-control" id="exampleFormControlInput1">
  </div>
    <div class="form-group">
    <label for="exampleFormControlSelect2">O que você está cursando no IFPE campus Igarassu?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Quantidade de Períodos do Curso:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Expectativas para o curso?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Qual sua primeira impressão sobre o campus Igarassu?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <label for="exampleFormControlTextarea1">Estado civil?</label>        
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> <br>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Quais eram suas disciplinas favoritas no ensino médio?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Quais matérias você tinha mais dificuldades no ensino médio?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Você veio de escola pública ou privada?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Você mora com seus pais ou algum familiar?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Você teve muitas dificuldades ao fazer o vestibular?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Como ficou sabendo sobre esse curso?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Como você se vê daqui a um ano e seis meses?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Como você se vê daqui a um ano e seis meses?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
      <div class="form-group">
    <label for="exampleFormControlTextarea1">Você pretende continuar na área assim que terminar esse curso?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
      <div class="form-group">
    <label for="exampleFormControlTextarea1">Qual foi sua trajetória até chegar no campus Igarassu?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Como você ficou sabendo sobre o campus?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection