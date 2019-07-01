@extends('layouts.app')

@section('content')
<div class="container">
	<div class="alert alert-success" role="alert">
		Respostas cadastradas com sucesso!
	</div>
		<a href="{{ route('home') }}" class="btn btn-primary"> Voltar para o Home</a>
</div>

@endsection