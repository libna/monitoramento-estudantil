@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header"></div>
              <div class="card-body">
                <div class="container">
                  <table>
                    <th>RESPOSTA</th><th>ID_PERGUNTA</th><th>ID_USUARIO</th>
                    @foreach($respostasform as $resposta)
                    <tr>
                      <td>{{$resposta->respostas}}</td>
                      <td>{{$resposta->perguntas_id}}</td>
                      <td>{{$resposta->users_id}}</td>
                    </tr>
                    @endforeach
                  </table>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>  
@endsection