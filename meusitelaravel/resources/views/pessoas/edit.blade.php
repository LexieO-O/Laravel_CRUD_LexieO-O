@extends('layout')

@section('titulo', 'Editar pessoa')

@section('conteudo')

<h1>Editar pessoa</h1>

<form action="{{ route('pessoas.update', $pessoa) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <input type="text" name="nome" value="{{ old('nome', $pessoa->nome) }}" placeholder="Nome">
        @error('nome') <small style="color:red">{{ $message }}</small> @enderror
    </div>
    <div>
        <input type="text" name="email" value="{{ old('email', $pessoa->email) }}" placeholder="E-mail">
        @error('email') <small style="color:red">{{ $message }}</small> @enderror
    </div>
    <button type="submit">Salvar</button>
</form>

<a href="{{ route('pessoas.index') }}">Voltar</a>
@endsection
