@extends('site.layouts.basico')

@section('titulo', $titulo)

@section('conteudo')
<div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Login</h1>
        </div>

        <div class="informacao-pagina">
            <form action={{route('site.login') }} method="post">
                @csrf
                <input name="usuario" type="text" placeholder="Usuario" class="borda-preta">
                <input name="senha" type="password" placeholder="Senha" class="borda-preta">
                <button type="submit" class="borda-preta">Acessar</button>
            </form>
            {{isset($erro) && $erro != '' ? $erro : ''}} // Se a variável $erro existir e não for vazia, exibe o valor dela
        </div>
        </div>

        <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="img/facebook.png">
            <img src="img/linkedin.png">
            <img src="img/youtube.png">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="img/mapa.png">
        </div>
</div>
@endsection
