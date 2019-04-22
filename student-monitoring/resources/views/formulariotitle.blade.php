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
    <title>Fomulário</title>
  </head>
  <body>
  <div class="container">
	<form>
  <div class="form-group">
    <h2 for="exampleFormControlInput1">Coloque o Título do seu Fomulário:</h2>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="example: Informações do Aluno">
  </div>
</form>
<button type="submit" class="btn btn-primary">Enviar Título</button>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('js/app.js')}}" type="text/JavaScript"></script>
  </body>
</html>