@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row align-items-center">
        <div class="col-4"><h3>Galeria de Fotos</h3></div>
        <div class="col-8 text-right"><a href="{{ route('posts.create') }}">Adicionar Foto</a></div>
    </div>

    <hr>

    <div class="row">
        <div class="col-4 pr-3 pb-3"><img class="w-100" src="/imagens/parque_bacacheri.jpg"></div>
        <div class="col-4 pr-3 pb-3"><img class="w-100" src="/imagens/parque_bacacheri.jpg"></div>
        <div class="col-4 pr-3 pb-3"><img class="w-100" src="/imagens/parque_bacacheri.jpg"></div>
        <div class="col-4 pr-3 pb-3"><img class="w-100" src="/imagens/parque_bacacheri.jpg"></div>
    <div>

</div>
@endsection
