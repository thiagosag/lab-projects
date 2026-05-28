@extends('layout')
@section('title', 'Home')

@section('content')
<div class="row container">
    @foreach($produtos as $produto)
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="{{ $produto['imagem'] }}">
            </div>
            <div class="card-content">
                <span class="card-title"><strong>{{ $produto['nome'] }}</strong></span>
                <a class="btn-floating halfway-fab waves-effect waves-light black">
                    <i class="material-icons">visibility</i>
                </a>
                <p>{{ $produto['descricao'] }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection

<!-- Aula 42 -->