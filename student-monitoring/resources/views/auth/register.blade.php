@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Que tipo de usuário você é?') }}</div>

                <div class="card-body">
                    <div class="container">
                        <!-- <div class="row"> -->

                            <div class=" btn-group-lg nav justify-content-center" role="group" aria-label="Basic example">
                                <a href="" class="btn btn-dark m-2" role="button">Aluno</a>
                                <a href="" class="btn btn-dark m-2" role="button">Egresso</a> 
                                <a href="" class="btn btn-dark m-2" role="button">Professor</a>
                            </div>

                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
