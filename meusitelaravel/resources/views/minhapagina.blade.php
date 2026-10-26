<p>Seja bem-vindo, {{ $nome }}!</p>

<form action="{{ route('pessoa.saudar') }}" method="POST">
    @csrf
    <label>Digite seu nome:</label>
    <input type="text" name="nome">
    <button type="submit">Enviar</button>
</form>
