@extends('layouts.app')

@section('content')
<div class="jumbotron">
    <div class="container">
        <h1 class="display-4">Bem Vindo!</h1>
        <p class="lead">Rumo ao Futuro</p>
        <hr>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{route('sobre.index')}}" role="button">Saiba Mais</a>
        </p>
    </div>
</div>    


@endsection
