
<!-- style .thumbnail a para esconder o botao de excluir que fica encima de cada imagem 
     style .mostrar_excluir:hover .thumbnail a para mostrar o botao de excluir quando mouse esta encima da imagem se tiver permissao do laravel usando @ auth no div -->

@extends('layouts.app')

<style>
    
    .thumbnail a 
    {
        display: none;
    }

   
    .mostrar_excluir:hover .thumbnail a
    {
        display:block;
        width:10px;
        height:10px;
        position:absolute;
        top:0px;
        right:30px;
    }

</style>


@section('content')

<div class="container">

    <div class="row align-items-center">
        <div class="col-4"><h3>Galeria de Fotos</h3></div>
        @auth
            <div class="col-8 text-right"><a href="{{ route('posts.create') }}">Adicionar Fotos</a></div>
        @endauth
    </div>

    <hr>
    
            <div class="row">
            @foreach($posts as $post)

            <div class="col-4 pb-3 mostrar_excluir" style="position:relative; width:'mainimagewidth'">
                    <img src="/storage/{{$post->image}}" class="w-100">
                @auth
                    <div class="thumbnail">
                        <a href="{{ url('/p/delete/' . $post->id ) }}">
                            <span><img style="height:25px;" src="/storage/imagens/deletex.png" /></span>
                        </a>
                    </div>
                @endauth
             </div>  

            @endforeach
            <div>
    


</div>
@endsection
