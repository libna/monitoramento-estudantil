@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header"></div>
              <div class="card-body">
                <div class="container">
                  @foreach($respostasform as $resposta)
                    {{$resposta->respostas}}-{{$resposta->perguntas_id}}-{{$resposta->users_id}}
                  @endforeach
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>  
@endsection