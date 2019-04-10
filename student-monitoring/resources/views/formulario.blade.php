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
        <form>
            <table>
                @foreach($perguntas as $pergunta)
                    <div class="form-group">
                       <label for="exampleFormControlInput1">
                          {{$pergunta->titulo}}
                       </label>
                       <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=""> 
                    </div>
              @endforeach       
           </table>
        </form>
        <button type="submit" class="btn btn-primary">Enviar Formulário</button>
    </div>
  </body>
</html>