<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MotivoContato;

class PrincipalController extends Controller
{
    public function principal(){
        $motivo_contatos = MotivoContato::all(); // Retorna todos os registros da tabela motivo_contatos
        return view('site.principal', ['motivo_contato' => $motivo_contatos]);

    }
}

