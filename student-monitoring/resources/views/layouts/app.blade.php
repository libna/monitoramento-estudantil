<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <style>
        html, body{
            min-height: 100%;
        }
        body, #nav-login{
            /*background-image: linear-gradient(to top, #11998e 80%, #38ef7d 100%);*/
            background-size: cover;
            background-repeat: no-repeat;
        }

        #botoes a:hover{
            color: white;
        }
    </style> 
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: transparent;border:none;">
            <div class="container mt-5">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <img src="{{asset('img/logos.png')}}" alt="Logo da Página" style="width: 100%">
                </a>

            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
        <div class="links">
            <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
              <a class="navbar-brand btn btn-link" href="#">Menu Principal</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbar2">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link btn btn-outline-success mr-2" href="{{asset('/')}}">Home <span class="sr-only">(current)</span></a>
                      </li>
                        <li class="nav-item active">
                        <a class="nav-link btn btn-outline-success mr-2" href="#">Parceiros<span class="sr-only">(current)</span></a>
                      </li>
                        <li class="nav-item active">
                        <a class="nav-link btn btn-outline-success mr-2" target="_blank" href="http://portal.ifpe.edu.br/">Portal IFPE<span class="sr-only">(current)</span></a>
                      </li>

                            <!-- Botões de Login e Cadastro -->
                                @if (Route::has('login'))
                                        @auth
                                        <li class="nav-item active">
                                            <a class="nav-link btn btn-outline-success mr-2" href="{{ url('/home') }}">Formulários</a>
                                        </li>   
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle btn btn-outline-dark" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item btn btn-dark" href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                        @else
                                        <li class="nav-item active">
                                            <a class="nav-link btn btn-outline-success mr-2" href="{{ route('login') }}">Entrar</a>
                                        </li>    

                                            @if (Route::has('register'))
                                                <li class="nav-item active">
                                                <a class="nav-link btn btn-outline-success mr-2" href="{{ route('register') }}">Cadastro</a>
                                                </li>
                                              </li>  
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                              <!-- Fim de botões -->

                    </ul>
                </div>
            </nav>
        </div>
    </div>
        <nav class="fixed-bottom bg-dark text-light">
            <div class="text-center py-3">Monitoramento Estudantil © 2019</div>
        </nav>      
</body>
</html>
