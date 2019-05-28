@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Selecione seu tipo de usuário') }}</div>
                <div class="card-body">
                    <div class="container">
                        <div class=" btn-group-lg nav justify-content-center" role="group" aria-label="Basic example">
                            <a href="{{asset('aluno')}}" onclick="aluno()" id="alunos" class="btn btn-dark m-2" role="button">Aluno / Egresso</a>
                            <a href="{{asset('professor')}}" onclick="prof()" class="btn btn-dark m-2" role="button">Professor</a>
                        </div>                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <script type="text/javascript">

    function aluno(){
        document.getElementById("aluno").className     = "";
        document.getElementById("professor").className = "d-none";
    }
    function prof(){
        document.getElementById("professor").className = "";
        document.getElementById("aluno").className     = "d-none";
    }
</script> -->
@endsection
