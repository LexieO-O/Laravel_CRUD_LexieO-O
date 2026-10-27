@extends('layout')

@section('titulo', 'Pessoas')

@section('conteudo')

<h1>Pessoas</h1>

<form class="cadastro" action="{{ route('pessoas.store') }}" method="POST">
    @csrf
    <div class="campo-grupo">
        <label class="campo" for="nome">Nome</label>
        <input type="text" id="nome" name="nome" placeholder="Digite seu nome"
               value="{{ old('nome') }}" class="@error('nome') invalido @enderror">
        @error('nome') <small class="erro">{{ $message }}</small> @enderror
    </div>
    <div class="campo-grupo">
        <label class="campo" for="email">E-mail</label>
        <input type="text" id="email" name="email" placeholder="Digite seu e-mail"
               value="{{ old('email') }}" class="@error('email') invalido @enderror">
        @error('email') <small class="erro">{{ $message }}</small> @enderror
    </div>
    <button type="submit" class="btn-cadastrar">Cadastrar</button>
</form>

<ul>
    @forelse ($pessoas as $pessoa)
        <li>
            <div class="info">{{ $pessoa->nome }}<span>{{ $pessoa->email }}</span></div>
            <a class="btn btn-editar" href="{{ route('pessoas.edit', $pessoa) }}">Editar</a>
            <form action="{{ route('pessoas.destroy', $pessoa) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn-excluir" onclick="return confirm('Excluir?')">Excluir</button>
            </form>
        </li>
    @empty
        <li><div class="info">Nenhuma pessoa cadastrada.</div></li>
    @endforelse
</ul>
@endsection
