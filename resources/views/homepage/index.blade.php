@extends('layouts.app')

@section('content')

<div class="container">

        <div class="jumbotron bg-transparent">
            @include('homepage/homepagebodyghost')
            <p class="lead text-center">Rumo ao Futuro</p>
            <hr>
        </div>

        

        @include('homepage/homepagebodyimg')

 
        <p class="lead text-center pt-5">Principais atividades</p>
        <hr>

        @include('homepage/homepagebodycard')

     
        <p class="lead text-center">Sempre pensando no seu Futuro</p>
        <hr>
        <p class="lead text-center"> A distinção entre passado, presente e futuro é apenas uma ilusão teimosamente persistente.</p>
       

        <p class="lead text-center">

        <div class="container_botao pb-4 ">
            <div class="botao_animado_left d-flex justify-content-center align-items-center ">
                <a href="#" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="teoria1 teoria2">Saiba Mais</a>
            </div>
        <div>

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

@endsection


