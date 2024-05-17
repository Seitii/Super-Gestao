<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="{{ asset('css/estilo_basico.css') }}">
    </head>
    <body>
        @include('site.layouts._partials.topo')
        @yield('conteudo')
    </body>
</html>

{{--
    include == desloca o conteudo do arquivo para o arquivo que o chamou
    yield == desloca o conteudo do arquivo que o chamou para o arquivo que foi chamado
    --}}
