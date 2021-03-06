<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>{{ config('app.name', 'Laravel') }}</title> -->
    <title>Nome Empresa</title>
    <link rel="shortcut icon" href="{{ asset('imagens/favicon.png') }}">

    <!-- Scripts -->    
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/lightbox.js') }}" type="text/javascript"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/lightbox.css') }}">
    

    <!--style especifico-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
    

    <!--Google Maps-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAoxCBzGTzazye6AgkNxBTDhwaeYf0SRKM"></script>

</head>

<style>

    .navbar-nav
    {
        font-size: 15px;           
    }

    .marcador_text
    {
        color: black;
        font-weight:bold;
    }
</style>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
            <div class="container">

                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                     <img class="pr-3" style="height:35px" src="{{ asset('imagens/favicon.png')}}" alt="">
                     <div class="">Nome Empresa</div>       
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto pt-1 pl-2">
                         <li class="nav-item">
                            <a class="nav-link" href="{{ route('sobre.index') }}"><div class="{{Request::is('p/sobre') ? 'marcador_text' : null}}">Sobre nós</div></a>
                        </li>                     
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('galeria.index') }}"><div class="{{Request::is('p/galeria') ? 'marcador_text' : null}}">Galeria</div></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contato.create') }}"><div class="{{Request::is('p/contato') ? 'marcador_text' : null}}">Contato</div></a>
                        </li>
    
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Links
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="https://www.facebook.com/" target="_blank">Facebook</a>
                            <a class="dropdown-item" href="https://www.instagram.com/?hl=pt-br" target="_blank">Instagram</a>
                            </div>
                        </li>
    
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

            <main class="main-page">
                @yield('content')       
            </main>

            @include('layouts/footer')
        
        
    </div>
</body>
</html>

<!-- Configuração do Lightbox usado na view/galeria -->
<script type="text/javascript">
  jQuery(function() {
    lightbox.option ({
        maxWidth: 800,
        maxHeight: 800,
        albumLabel: "%1 de %2",
    });
  });
</script>