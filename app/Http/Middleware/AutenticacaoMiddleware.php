<?php
// Middleware é um filtro que é executado antes de uma rota
// Camadas de software implemntadas em camadas distintas
// Intercepta uma requisição http e pode interromper o fluxo da requisição
// Bloqueia ou interrompe as rotas.
// Registra os LOGS (IP, data, hora, acesso, etc)
// Cors = Compartilhaemnto de recursos com origens diferentes, permite que um site acesse recursos de outro site.

namespace App\Http\Middleware;

use Closure;
use Facade\FlareClient\Http\Response;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $metodo_autenticacao)
    {
        // echo $metodo_autenticacao;
        // if(true){
        //     return $next($request); // Pega a requisição e empurra para frente, Se for true, passa para a próxima rota
        // }else{
        //     return Response('Acesso negado! Rota exige autenticação');
        // }
        session_start();
        if(isset($_SESSION['email']) && $_SESSION['email'] != ''){
            return $next($request);
        }else{
            return redirect()->route('site.login', ['erro' => 2]);
        }
    }
}
