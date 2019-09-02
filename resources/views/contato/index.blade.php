@extends('layouts.app')

@section('content')
<div class="container pb-4 pt-4">
    <div class="row align-items-center">
        <div class="col-4"><h3>Contato</h3></div>
    </div>

    <hr>

    <!-- ROW -->
    <div class="row align-items-center align-content-center py-3">

        <div class="col-4 offset-1  contato border">
            <div>teste </div>
        </div>

        <div class="col-5 border offset-1 shadow mb-5 bg-white rounded">
            
            <div class="map-container" id="map-container" style="height:400px;"> 

            </div>

        </div>

    </div>
    <!-- FIM ROW -->

</div>



@endsection