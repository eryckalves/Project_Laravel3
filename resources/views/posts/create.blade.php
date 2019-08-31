@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p/galeria" method="post" enctype="multipart/form-data">
    @csrf
        <div class="row">
            <label for="image" class="col-6">

                <div class=""><h3>Incluir Imagem</h3></div>
                <hr>
            
            </label>
            <input type="file" class="form-control-file pt-1 pl-3 pb-1" id="image" name="image">
                        
            @if($errors->has('image'))
                <strong>{{ $errors->first('image') }}</strong>
            @endif
        </div>
        <div class="pt-4">
            <button class="btn btn-primary">Adicionar</button>
        </div>    
    <form>
</div>
@endsection
