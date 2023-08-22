@extends('layout')
@section('content')

<div class="card border">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 col-sm-6 text-center">
                <p class="texto">
                    <h4><strong>Pergunta 4: </strong> </h4>
                </p>
            </div>
        <div>
        <form action="{{route('dadosPagina4')}}" method="POST">
            @csrf

        <div class="form-group py-4">
            <label for="pergunta"> Qual a jogadora que foi 6 vezes melhor do mundo? <h3> <strong> </strong> </h3> </label>
            <div class="form-check py-4">
                <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="A">
                <label class="form-check-label" for="pergunta">
                    <h5> Rapinoe </h5>
                </label>
            </div>
        <div class="form-check py-4">
                <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="B">
                <label class="form-check-label" for="pergunta">
                    <h5> Alex Morgan </h5>
                </label>
        </div>
        <div class="form-check py-4">
                <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="C">
                <label class="form-check-label" for="pergunta">
                    <h5> Alexia Putellas </h5>
                </label>
        </div>
        <div class="form-check py-4">
                <input class="form-check-input" type="radio" name="pergunta" id="pergunta" value="D">
                <label class="form-check-label" for="pergunta">
                    <h5> Marta </h5>
                </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-sm">Próxima</button>
    <button onclick="window.location.href='/';" type="button"
            class='btn btn-danger btn-sm'>Desistir</button>
    </form>
</div>
</div>

@endsection
