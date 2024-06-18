<?php

namespace App\Http\Middleware;

use Closure;
use App\LogAcesso;

class LogAcessoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // $request = Requisição ( pode ser manipulavel)
        // response = Resposta ( pode ser manipulavel) Antes de entregar para o browser

        //dd($request); // metodo dd ele forma uma objeto response.
        $ip = $request->server->get('REMOTE_ADDR'); // Pega o IP do usuário
        $rota = $request->getRequestUri(); // Pega a rota que o usuário acessou
        LogAcesso::create([
            'log' => "IP $ip requisitou a rota $rota"
        ]);
        //return $next($request);
        $resposta = $next($request);
        $resposta->setStatusCode(201, 'O status da resposta e o texto da resposta foram alterados');
        // Altera o status da resposta quando abre a pagina web
        return $resposta;
        //return Response('Chegamos no middleware e finalizamos no middleware');
    }
}
