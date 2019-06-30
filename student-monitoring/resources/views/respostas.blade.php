@extends('layouts.app')

@section('content')
  @if(Auth::user()->matricula == null)
    @foreach($see as $ver) 
      {{$ver->titulo}}
    @endforeach 
  @endif  
@endsection




