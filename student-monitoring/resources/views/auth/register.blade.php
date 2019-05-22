@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Que tipo de usuário você é?') }}</div>

                <div class="card-body">
                    <div class="container">
                        <div class="row">

                            <div class="col-4">
                                <a href="" class="btn btn-primary btn-lg" role="button">Aluno</a>
                            </div>

                            <div class="col-4">
                                <a href="" class="btn btn-primary btn-lg" role="button">Egresso</a>
                            </div>

                            <div class="col-4">
                                <a href="" class="btn btn-primary btn-lg" role="button">Professor</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
