@extends('layouts.app')

@section('content')
	<div class="container" >
		<label>Cadastre a pergunta no formulário criado</label>
		<form action="{{ route('pergSave') }}" method="POST" >
		@csrf
			<div class="form-group" >
				<input type="hidden" name="id" value="{{ $id }}">

				<input class="form-control" type="text" name="pergunta">
				<select class="form-control mt-2" id="exampleFormControlSelect1" required name="tipoPergunta">
						<option value="1" >Selecione o tipo da sua pergunta</option>
					@foreach($tipoDePergunta as $tipo)
						<option value="{{$tipo->id}}">{{$tipo->tipo}}</option>
					@endforeach
				</select>
				<input class="btn btn-primary mt-2" type="submit" value="Cadastar Pergunta">
			</div>
		</form>


	</div>
@endsection