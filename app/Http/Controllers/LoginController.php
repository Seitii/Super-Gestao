<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    public function index(Request $request){
        $erro =  '';// Recuperando o erro da URL, acesssa os atributos da requisição.

        if($request->get('erro') == 1){
            $erro = 'Usuário ou senha não existe';
        }
        if ($request->get('erro') == 2){
            $erro = 'Necessário realizar o login para acessar a página';
        }

        // Redirect enviando parametros para a view
        return view('site.login', ['titulo' => 'Login', 'erro' => $erro]);
    }

    public function autenticar(Request $request){
        // regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];


        // As mensagens de feddback de validação
        $feedback = [
        'usuario.email' => 'O campo usuario (email) é obrigatorio',
        'senha.required' => 'O campo senha é obrigatorio'
    ];

    // se não passar no validate, ele retorna para a página de login
    $request->validate($regras, $feedback);

    // Recuperando os parametrso do formulario.
    $email = $request->get('usuario');
    $password = $request->get('senha');

    // Iniciar o model user
    $user = new User();

    $usuario = $user->where('email', $email)
    ->where('password', $password)
    ->get()
    ->first();
    //  Get = retorna uma coleção de objetos
    //  First = Retorna o primeiro objeto da coleção

    if(isset($usuario->name)){
        session_start(); // Inicia a sessão do usuário logado
        $_SESSION['name'] = $usuario->name;
        $_SESSION['email'] = $usuario->email;

        return redirect()->route('app.home');
    }else{
        // Se não encontrar o usuário, ele redirecdiona para a página de login, passando um array associativo com erro 1.
        return redirect()->route('site.login', ['erro' => 1]);
    }

    }
    public function sair(){
        session_destroy(); // Destroi a sessão do usuário logado
        return redirect()->route('site.login');
    }
}
