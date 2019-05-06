@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header"></div>
              <div class="card-body">
                <div class="container">
<!--                   <table class="table">
                    <th>RESPOSTA</th><th>ID_PERGUNTA</th><th>ID_USUARIO</th>
                    @foreach($respostasform as $resposta)
                    <tr>
                      <td>{{$resposta->respostas}}</td>
                      <td>{{$resposta->perguntas_id}}</td>
                      <td>{{$resposta->users_id}}</td>
                    </tr>
                    @endforeach
                  </table> -->
                  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">RESPOSTA</th>
      <th scope="col">ID_PERGUNTA</th>
      <th scope="col">ID_USUÁRIO</th>
    </tr>
  </thead>
  <tbody>
    @foreach($respostasform as $resposta)
    <tr>
      <td>{{$resposta->respostas}}</td>
      <td>{{$resposta->perguntas_id}}</td>
      <td>{{$resposta->users_id}}</td>

    </tr>
    @endforeach
  </tbody>
</table>

                </div>
              </div>
          </div>
        </div>
      </div>
    </div>  
@endsection




