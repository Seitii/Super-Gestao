@extends('site.layouts.basico')

{{--
   csrf == Falsificação de solicitações entre sites.
        == Gera um token para o formulário, para que o formulário seja enviado apenas pelo site que o gerou.

    Component = Views dentro de outras views
              == Incluir parametros em views
              {{$slot}}
              define dentro do componente onde o conteudo será exibido
        --}}



@section('conteudo')
<div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                @component('site.layouts._components.form_contato', ['classe' => 'borda-preta'])
                    <p>A nossa equip entrara em contato em breve</p>
                @endcomponent
            </div>
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
