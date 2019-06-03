@extends('layouts.app')
        
@section('content')
<div class="container">
  <div class="row">
    <div class="col">
    	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		    	<a target="_blank" href="http://portal.ifpe.edu.br/noticias/sai-relacao-de-isentos-da-taxa-do-vestibular/view">
		      		<img src="{{asset('img/ifpe1.png')}}" class="d-block w-100" alt="...">
		      	</a>
		    </div>
		    <div class="carousel-item">
				<a target="_blank" href="http://portal.ifpe.edu.br/noticias/propesq-divulga-novo-cronograma-do-edital-de-iniciacao-cientifica/view">
		      		<img src="{{asset('img/ifpe2.png')}}" class="d-block w-100" alt="...">
		      	</a>	
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
    </div>
    <div class="col"><h1>Seja bem-vindo!</h1></div>
    <div class="w-100"></div>
    <div class="col">Column</div>
    <div class="col">Column</div>
  </div>
</div>
@endsection
