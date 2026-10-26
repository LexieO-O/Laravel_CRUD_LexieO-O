@extends('layout')

@section('titulo', 'Pessoas')

@section('conteudo')

<h1>Pessoas</h1>

<form action="{{ route('pessoas.store') }}" method="POST">
    @csrf
    <div>
        <input type="text" name="nome" placeholder="Nome" value="{{ old('nome') }}">
        @error('nome') <small style="color:red">{{ $message }}</small> @enderror
    </div>
    <div>
        <input type="text" name="email" placeholder="E-mail" value="{{ old('email') }}">
        @error('email') <small style="color:red">{{ $message }}</small> @enderror
    </div>
    <button type="submit">Cadastrar</button>
</form>

<ul>
    @forelse ($pessoas as $pessoa)
        <li>
            {{ $pessoa->nome }} {{ $pessoa->email }}
            <a href="{{ route('pessoas.edit', $pessoa) }}">Editar</a>
            <form action="{{ route('pessoas.destroy', $pessoa) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Excluir?')">Excluir</button>
            </form>
        </li>
    @empty
        <li>Nenhuma pessoa cadastrada.</li>
    @endforelse
</ul>
@endsection
