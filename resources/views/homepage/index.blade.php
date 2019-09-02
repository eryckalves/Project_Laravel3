@extends('layouts.app')

@section('content')

<div class="container">

    <div class="jumbotron bg-transparent">
        <h1 class="display-4 text-center">Bem Vindo!</h1>
        <p class="lead text-center">Rumo ao Futuro</p>
        <hr>

        @include('homepage/homepagebodyimg')

 
        <p class="lead text-center">Principais atividades</p>
        <hr>

        @include('homepage/homepagebodycard')

        <p class="lead text-center">Sempre pensando no seu Futuro</p>
        <hr>

        <p class="lead text-center">
         <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="teoria1 teoria2">Saiba Mais</button>
        </p>
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="teoria1">
                    <div class="card card-body">
                    O trabalho em escritório deixará de ser popular, 
                    as produções serão por hora e totalmente por meio de home office e as 
                    aposentadorias como as conhecemos hoje desaparecerão.
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="collapse multi-collapse" id="teoria1">
                    <div class="card card-body">
                    Em 1935, Einstein e o físico Nathan Rosen utilizaram a 
                    teoria da relatividade geral para elaborar a ideia, propondo a existência 
                    de “pontes” através do espaço-tempo.
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>    

@endsection
