@extends('layouts.app')

@section('content')
	<div class="container" >
		<label>cadastre a pergunta no formulário criado</label>
		<form action="{{ route('pergSave') }}" method="POST" >
		@csrf
			<div class="form-group" >
				<input type="hidden" name="id" value="{{ $id }}">

				<input class="form-control" type="text" name="pergunta">
				<select class="form-control" id="exampleFormControlSelect1" name="tipoPergunta">
						<option>Selecione o tipo da sua pergunta</option>
					@foreach($tipoDePergunta as $tipo)
						<option value="{{$tipo->id}}">{{$tipo->tipo}}</option>
					@endforeach
				</select>
				<input class="btn btn-primary" type="submit" value="cadastre sua pergunta">
			</div>	
		</form>
	</div>	
@endsection