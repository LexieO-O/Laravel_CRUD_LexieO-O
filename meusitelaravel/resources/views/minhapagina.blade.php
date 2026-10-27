@extends('layout')

@section('titulo', 'Olá!')

@section('conteudo')

<h1>Seja bem-vindo, {{ $nome }}!</h1>

<form class="cadastro" action="{{ route('pessoa.saudar') }}" method="POST">
    @csrf
    <div class="campo-grupo">
        <label class="campo" for="nome">Digite seu nome</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome">
    </div>
    <button type="submit" class="btn-cadastrar">Enviar</button>
</form>

@endsection
