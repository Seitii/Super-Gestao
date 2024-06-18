<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContato;
use App\MotivoContato;

class ContatoController extends Controller
{
    public function contato(Request $request){

        $motivo_contatos = MotivoContato::all(); // Retorna todos os registros da tabela motivo_contatos
        // $contato = new SiteContato();
        // $contato->nome = $request->input('nome');
        // $contato->telefone = $request->input('telefone');
        // $contato->email = $request->input('email');
        // $contato->motivo_contato = $request->input('motivo_contato');
        // //print_r($contato->getAttributes()); // Retorna os atributos do objeto em forma de array dos contato
        // $contato->save(); // Salva os dados no banco de dados
        return view('site.contato', ['titulo' => 'Contato (teste)']);

        // retorna tudo de uma vez em forma de array

        // $contato->save(); // Salva os dados no banco de dados
    }
    public function salvar(Request $request){
        // realizar a validação dos dados antes de salvar no banco de dados (recebidos no request)
        $request->validate([
            'nome'                  => 'required|min:3|max:40',
            'telefone'              => 'required',
            'email'                 => 'email|unique:site_contatos',
            'motivo_contatos_id'    => 'required',
            'mensagem'              => 'required'
        ]);
        // required = campo obrigatório
        SiteContato::create($request->all());
        return redirect()->route('site.principal');
    }
}

// eloquent ORM
// Mapeamento objeto-relacional -> Tecnica para aproximar a orientação a objetos com o banco de dados relacional
// Como os dados serão mapeados nos 2 ambientes.
// Reduz o tempo de desenovlvimento de uma aplicação.
// Data Mapper / Active record

// Tinker é um console interativo para acessar as classes do projeto
