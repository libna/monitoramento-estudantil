@extends('layouts.app')

@section('content')

  <div class="container">
	<form method="POST" action="{{ route('salvarform') }}">
    @csrf
        <div class="form-group">
            <h2 for="exampleFormControlInput1">Coloque o Título do seu Fomulário:</h2>
            <input type="text" name="nameForm" class="form-control" id="exampleFormControlInput1" placeholder="example: Informações do Aluno">
        </div>
    <button type="submit" class="btn btn-primary">Enviar Título</button>
  </form>
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="{{asset('js/app.js')}}" type="text/JavaScript"></script>

@endsection