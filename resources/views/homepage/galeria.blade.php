@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row align-items-center">
        <div class="col-4"><h3>Galeria de Fotos</h3></div>
        @auth
            <div class="col-8 text-right"><a href="{{ route('posts.create') }}">Adicionar Foto</a></div>
        @endauth
    </div>

    <hr>
    
            <div class="row">
            @foreach($posts as $post)
                <div class="col-4 pr-2 pb-2"><img class="w-100" src="/storage/{{$post->image}}"></div>
            @endforeach
            <div>
    


</div>
@endsection
