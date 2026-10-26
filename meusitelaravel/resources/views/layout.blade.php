<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('titulo', 'Meu Site')</title>
</head>
<body>

    @include('partials.menu')

    @yield('conteudo')

</body>
</html>
