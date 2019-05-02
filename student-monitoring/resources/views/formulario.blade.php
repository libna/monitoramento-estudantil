@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Formulário para alunos  recém-chegados</div>
              <div class="card-body">
                <div class="container">
                  <form action="{{ route('form') }}" method="POST">
                    @csrf
                      @foreach($perguntas as $pergunta)
                        <div class="form-group">
                          <label for="exampleFormControlInput2">
                            {{$pergunta->titulo}}
                          </label>
                            <input type="text" name="pergunta_{{ $pergunta->id }}" class="form-control" id="exampleFormControlInput2" placeholder=""> 
                        </div>
                      @endforeach
                    <button type="submit" class="btn btn-primary">Enviar Formulário</button>
                  </form>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>  
@endsection