@extends('layout')
@section('content')
<div class="jumbotron">
    <p class="h3 text-center py-4"> Quiz - O que voce sabe sobre a copa do mundo feminina</p>
</div>
<div class="row">
    <div class="col-md-6 col-sm-6 text-center imagem">
    <a href='#' class="img-thumbnail logo">
        <img class="img-fluid" src="{{asset('storage/imagem/logo.jpg')}}" />
    </a>
</div>
<div class="col-md-6 col-sm-6 text-center imagem">
    <p class="texto">
        <h4>Este quiz é pra saber se voce esteve antenado na competição <br>
            <strong>COPA DO MUNDO 2023</strong> </h4>
    </p>
    <div class='card-footer py-4 text-center'>

        <a href="/iniciar" class="btn btn-primary" role="button">Começar</a>
    </div>
</div>
</div>

@endsection