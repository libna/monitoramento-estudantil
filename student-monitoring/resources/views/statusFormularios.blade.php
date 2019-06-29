@extends('layouts.app')

@section('content')
	<div class="container" >
	

		@foreach($form as $forms)
			{{$forms[0]->titulo}}
		@endforeach
	</div>
@endsection