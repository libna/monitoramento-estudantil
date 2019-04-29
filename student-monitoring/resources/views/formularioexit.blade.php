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
    @csrf
     @foreach($perguntasSaida as $saida)
          <div class="form-group">
              <label for="exampleFormControlInput1">
                  {{$saida->titulo}}
              </label>
                <input type="text" name="saida_{{ $saida->id }}" class="form-control" id="exampleFormControlInput1" placeholder=""> 
          </div>
     @endforeach   
  </form>
  <button type="submit" class="btn btn-primary">Enviar Formulário</button>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/app.js')}}" type="text/JavaScript"></script>
</body>
</html>