<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
		<style>
			body{
				background-color: #fff;
			}
			.container{
				margin-top: 20px;
			}
		</style>	
    <title>Questionário #1</title>
  </head>
  <body>
  <div class="container">
  @foreach($form as $perguntas)
      {{$perguntas['titulo ']}}
  @endforeach
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
</form>
<button type="submit" class="btn btn-primary">Enviar Formulário</button>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/app.js')}}" type="text/JavaScript"></script>
  </body>
</html>