@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">{{$perguntas[0]->titulo}}</div>
              <div class="card-body">
                <div class="container">
                  <form action="{{ route('formsave') }}" method="POST" class="mb-4">
                    @csrf
                      <input type="hidden" name="form_id" value="{{ $id }}">
                      @foreach($perguntas[0]->perguntas as $pergunta)
                        <div class="form-group">
                          <label for="exampleFormControlInput2">
                            {{$pergunta->titulo}}
                          </label>
                            <input type="text" name="pergunta_{{ $pergunta->id }}" class="form-control" id="exampleFormControlInput2" placeholder=""> 
                        </div>
                      @endforeach
                    <button type="submit" class="btn btn-primary">Enviar Formulário</button>
                    <a href="{{asset('home')}}" class="ml-3" role="button">Voltar</a>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>  
@endsection