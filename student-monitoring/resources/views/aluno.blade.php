@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            <div class="card-header" id="titulo">{{ __('Cadastre-se') }}</div>
                <div class="card-body">
                    <div id="conteudo">
                <center><p>Cadastre a matrícula corretamente para que não haja erro no cadastro.</p></center>
          </div>
<!--                 <script>
                        let titulo = document.getElementById('titulo');
                        let conteudo = document.getElementById('conteudo');
                        titulo.onmouseover = function() {
                        // titulo.style.background = 'red';
                        conteudo.style.display = 'block';
                        }
                        titulo.onmouseout = function() {
                        // titulo.style.background = 'transparent';
                        conteudo.style.display = 'none';
                    }
    </script> -->
                                    <form method="POST" action="{{ route('register_student') }}" id="cadUsuario" >
                                        @csrf
                                        <div class="form-group row">
                                            <label for="matricula" class="col-md-4 col-form-label text-md-right">{{ __('Matrícula') }}</label>

                                            <div class="col-md-6">
                                                <input id="matricula" type="text" class="form-control{{ $errors->has('matricula_aluno') ? ' is-invalid' : '' }}" name="matricula_aluno" value="{{ old('matricula_aluno') }}" required autofocus>

                                                @if ($errors->has('matricula_aluno'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('matricula_aluno') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                            <div class="col-md-6">
                                                <input id="name_aluno" type="text" class="form-control{{ $errors->has('name_aluno') ? ' is-invalid' : '' }}" name="name_aluno" value="{{ old('name_aluno') }}" required autofocus>

                                                @if ($errors->has('name_aluno'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name_aluno') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Endereço de E-mail') }}</label>

                                            <div class="col-md-6">
                                                <input id="email_aluno" type="email" class="form-control{{ $errors->has('email_aluno') ? ' is-invalid' : '' }}" name="email_aluno" value="{{ old('email_aluno') }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email_aluno') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                                            <div class="col-md-6">
                                                <input id="password_aluno" type="password" class="form-control{{ $errors->has('password_aluno') ? ' is-invalid' : '' }}" name="password_aluno" required>

                                                @if ($errors->has('password_aluno'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password_aluno') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmação de senha') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm_aluno" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-success" id="salvar" >
                                                    {{ __('Fazer registro') }}
                                                </button>
                                                <a href="{{asset('register')}}" class="btn btn-outline-danger" role="button">Voltar</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
	             		</div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

    <script type="text/javascript">
        $('#cadUsuario').on('submit', function(evt) {
            evt.preventDefault();

            var dados = $('#cadUsuario').serialize();

            $.ajax({
                type: 'POST',
                // dataType: 'json',
                url:'{{ route("register_student") }}',
                async: true,
                data: dados,
                success: function(response) {
                    console.log("avanade");
                   window.location.replace("{{route('home')}}");
                },
                error: function(/*ver o que eh passado no erro de ajax (consultar documentação do jquery)*/) {
                    // alert =)
                }

            });
        });
    </script>
@endsection