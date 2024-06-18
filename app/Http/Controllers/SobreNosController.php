<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Http\Middleware\LogAcessoMiddleware;

class SobreNosController extends Controller
{
    public function __construct(){
        $this->middleware(LogAcessoMiddleware::class);
        //$this->middleware('log.acesso'); // outro metodo para utilizar o middleware
    } // aplica o middleware em todas os constructors do controller. ( pode ser aplicado em rotas individuais )

    public function SobreNos(){
        return view('site.sobre-nos');
    }
}
