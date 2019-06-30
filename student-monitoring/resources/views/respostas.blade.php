@extends('layouts.app')

@section('content')
  @if(Auth::user()->matricula == null)
    <div class="container">
      @foreach($see as $ver)
        <div>
          {{$ver->titulo}}
        </div>
      @endforeach 
    </div>
  @endif  
@endsection




