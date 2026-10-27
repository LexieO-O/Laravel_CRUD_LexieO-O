@extends('layout')

@section('titulo', 'Editar pessoa')

@section('conteudo')

<h1>Editar pessoa</h1>

<form class="cadastro" action="{{ route('pessoas.update', $pessoa) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="campo-grupo">
        <label class="campo" for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome"
               value="{{ old('nome', $pessoa->nome) }}" class="@error('nome') invalido @enderror">
        @error('nome') <small class="erro">{{ $message }}</small> @enderror
    </div>
    <div class="campo-grupo">
        <label class="campo" for="email">E-mail</label>
        <input type="text" id="email" name="email" placeholder="Digite seu e-mail"
               value="{{ old('email', $pessoa->email) }}" class="@error('email') invalido @enderror">
        @error('email') <small class="erro">{{ $message }}</small> @enderror
    </div>
    <button type="submit" class="btn-cadastrar">Salvar</button>
</form>

<a class="voltar" href="{{ route('pessoas.index') }}">← Voltar</a>
@endsection
