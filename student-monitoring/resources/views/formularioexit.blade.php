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
      h1{
        text-align: center;
      }
    </style>  
    <title>Questionário #2</title>
  </head>
  <body>
  <h1>Formulário para alunos egressos.</h1>
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
    <label for="exampleFormControlSelect2">O que você cursou no IFPE campus Igarassu?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Quantidade de Períodos do Curso:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">O que você achou do seu curso?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Como foi sua experiência aqui no curso?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <label for="exampleFormControlTextarea1">Estado civil?</label>        
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> <br>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Quais eram suas disciplinas favoritas no curso?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Conte-nos como foi sua experiência aqui no campus:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Você está fazendo algum curso no campus Igarassu?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
<div class="form-group">
    <label for="exampleFormControlTextarea1">Você conseguiu algum estágio enquanto estava cursando?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Você pretende fazer algum curso com relação a sua Área?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Como você se vê daqui a 3 anos?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Você trabalha na Área?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Você está cursando em algum outro campus?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Você está cursando algum outro curso aqui no campus Igarassu?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Quais perguntas você acha que devemos adicionar no formulário?</label>
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