<?php
/*
Agrupa a logica do que deve ser feito por determinado cliente.

A rota esta associada ao controller a action.

Direcionamos as rotas para os controladores.
Atender os requisitos do cliente.

Definimos nos metodos do controller o que deve ser feito atraves de uma rota.

associamos a rota com um Actions dentro do controlador para chamar as rotas. ( metodos )


views = Visões que produzimos do servidor e retornamos para o cliente que fez a requisição.
Pagina html, processadas ao lado do servidor e enivadas para o cliente que fez a requisição.

Tradicional = Construção de view ao lado do servidor
Moderna = Construção distinta do front e back end, conectadas por API

*/
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
