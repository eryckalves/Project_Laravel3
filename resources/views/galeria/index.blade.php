
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

<div class="container pb-4 pt-4">

    <div class="row align-items-center">

        <div class="col-4">           
            <h3>Galeria de Fotos</h3>   
        </div>

    </div>
    
    <hr>

    <div class="row">

        @auth
        <div class="col-8">
             <div class="container_botao ">
                 <div class="botao_animado_left d-flex flex-row-reverse">
                    <a href="{{ route('posts.create') }}">Adicionar Fotos</a>
                </div>
             </div>
        </div>
        @endauth

    <div>
   
    <!-- gallery-block cards-gallery -->
    <div class="gallery-block cards-gallery pt-5">

        <!-- container -->
        <div class="container">


            <div class="row">
            
                @foreach($posts as $post)

                <div class="col-md-6 col-lg-4 mostrar_excluir">
                    <div class="card border-0 transform-on-hover">
                        <!-- Configuracao do data-lightbox esta no layouts/app.blade.php -->
                        <a href="/storage/{{$post->image}}" data-lightbox="roadtrip">
                            <img src="/storage/{{$post->image}}" class="w-100">
                        </a>      
                    </div>

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
            <!-- FIM row -->

        </div>
        <!-- FIM CONTAINER -->

    </div>
    <!-- FIM gallery-block cards-gallery -->
</div>

@endsection

