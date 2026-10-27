<input type="checkbox" id="menu-toggle" class="menu-toggle">
<label for="menu-toggle" class="hamburguer" aria-label="Abrir menu"></label>
<label for="menu-toggle" class="overlay"></label>

<nav class="menu">
    <label for="menu-toggle" class="fechar" aria-label="Fechar menu">×</label>
    <a href="{{ url('/') }}">Início</a>
    <a href="{{ route('pessoas.index') }}">Pessoas</a>
    <a href="{{ url('/ola') }}">Olá</a>
</nav>
