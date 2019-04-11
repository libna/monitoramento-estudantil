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
    <title>Questionário #1/1</title>
  </head>
  <body>
    <div class="container">
        <form action="{{ route('form') }}" method="POST">
          @csrf
              @foreach($perguntas as $pergunta)
                    <div class="form-group">
                       <label for="exampleFormControlInput1">
                          {{$pergunta->titulo}}
                       </label>
                       <input type="text" name="pergunta_{{ $pergunta->id }}" class="form-control" id="exampleFormControlInput1" placeholder=""> 
                    </div>
              @endforeach
        <button type="submit" class="btn btn-primary">Enviar Formulário</button>
        </form>
    </div>
  </body>
</html>