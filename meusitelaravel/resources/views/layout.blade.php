<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titulo', 'Meu Site')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Jua&family=Lily+Script+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/estilo.css') }}">
</head>
<body>

    @include('partials.menu')

    <main>
        @yield('conteudo')
    </main>

</body>
</html>
