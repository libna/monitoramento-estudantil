@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">Formulário para Alunos Egressos</div>
              <div class="card-body">
                <div class="container">
                  <form action="{{ route('formexit') }}" method="POST">
                    @csrf
                       @foreach($perguntasSaida as $saida)
                        <div class="form-group">
                          <label for="exampleFormControlInput1">
                              {{$saida->titulo}}
                          </label>
                            <input type="text" name="saida_{{ $saida->id }}" class="form-control" id="exampleFormControlInput1" placeholder=""> 
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



