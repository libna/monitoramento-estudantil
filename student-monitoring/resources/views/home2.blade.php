<!doctype html>
<html lang="pt-br">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('css/app.css')}}">
	<title></title>
</head>
	<body>
		<div class="container">


			<!-- Logo da página -->
			<div class="row">
    			<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12"><img src="{{asset('img/logos.png')}}" alt="Logo da Página" style="width: 100%;"></div>
  			</div>
  			<!-- Fim da logo da página -->


    			<div class="row">
					<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
						  <a class="navbar-brand" href="#">Menu Principal</a>
					  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					    <span class="navbar-toggler-icon"></span>
					  </button>
					  <div class="collapse navbar-collapse" id="navbarNav">
					    <ul class="navbar-nav">
					      <li class="nav-item active">
					        <a class="nav-link" href="#">Início<span class="sr-only">(current)</span></a>
					      </li>
					      <li class="nav-item active">
					        <a class="nav-link" href="#">Sobre</a>
					      </li>
					      <li class="nav-item active">
					        <a class="nav-link" href="#">Login</a>
					      </li>
					      <li class="nav-item active">
					        <a class="nav-link" href="#">Cadastro</a>
					      </li>
					      <li class="nav-item active">
					        <a class="nav-link" href="#">Ajuda</a>
					      </li>
					    </ul>
					  </div>
					</nav>
    			</div>
		</div>
		<script src="{{asset('js/app.js')}}" type="text/JavaScript"></script>
	</body>
</html>




