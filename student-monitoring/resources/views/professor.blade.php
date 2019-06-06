@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastre-se') }}</div>
	              	<div class="card-body">
	                    <div class="container">
	                    	<div class="" id="professor">
	                            <div class="card-body">
                                    <form method="POST" action="{{ route('register_prof') }}"  id="cadUsuario" >
                                        @csrf
                                        <div class="form-group row">
                                            <label for="siape" class="col-md-4 col-form-label text-md-right">{{ __('SIAPE') }}</label>

                                            <div class="col-md-6">
                                                <input id="siape" type="text" class="form-control{{ $errors->has('siape_prof') ? ' is-invalid' : '' }}" name="siape_prof" value="{{ old('siape_prof') }}" required autofocus>

                                                @if ($errors->has('siape_prof'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('siape_prof') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                                            <div class="col-md-6">
                                                <input id="name_prof" type="text" class="form-control{{ $errors->has('name_prof') ? ' is-invalid' : '' }}" name="name_prof" value="{{ old('name_prof') }}" required autofocus>

                                                @if ($errors->has('name_prof'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('name_prof') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Endereço de E-mail') }}</label>

                                            <div class="col-md-6">
                                                <input id="email_prof" type="email" class="form-control{{ $errors->has('email_prof') ? ' is-invalid' : '' }}" name="email_prof" value="{{ old('email_prof') }}" required>

                                                @if ($errors->has('email_prof'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('email_prof') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                                            <div class="col-md-6">
                                                <input id="password_prof" type="password" class="form-control{{ $errors->has('password_prof') ? ' is-invalid' : '' }}" name="password_prof" required>

                                                @if ($errors->has('password_prof'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('password_prof') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="password-confirm_prof" class="col-md-4 col-form-label text-md-right">{{ __('Confirmação de senha') }}</label>

                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>

                                        <div class="form-group row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                                <button type="submit" class="btn btn-success">
                                                    {{ __('Fazer registro') }}
                                                </button>
                                                <a href="{{asset('register')}}" class="ml-3" role="button">Voltar</a>
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
                url:'{{ route("register_prof") }}',
                async: true,
                data: dados,
                success: function (response) {
                   window.location.replace("{{route('home')}}");
                }

            });
        });
    </script>
@endsection